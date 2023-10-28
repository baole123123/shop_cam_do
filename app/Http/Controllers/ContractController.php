<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Assets;
use App\Models\Contract;
use App\Models\Log as SystemLog;
use App\Http\Requests\StoreContractRequest;
use App\Http\Requests\UpdateContractRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use App\Traits\UploadFileTrait;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    use UploadFileTrait;

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Contract::select('*');
        $query->orderBy('id', 'DESC');
        $limit = $request->limit ? $request->limit : 10;
        if ($request->name_phone) {
            $query->where('customer_name', 'LIKE', "%$request->name_phone%")
            ->orWhere('customer_phone', 'LIKE', "%$request->name_phone%");
        }
        $items = $query->paginate($limit);
        $params = [
            'items' => $items
        ];
        return view("admin.contracts.index", $params);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $assets = Assets::get();
        $customers = Customer::get();
        $params = [
            'assets' => $assets,
            'customers' => $customers
        ];
        return view("admin.contracts.create", $params);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContractRequest $request)
    {
        $item = new Contract();
        $item->customer_id = 1;
        $item->customer_phone = $request->customer_phone;
        $item->customer_name = $request->customer_name;
        $item->customer_identi = $request->customer_identi;
        $item->customer_birthday = $request->customer_birthday;
        $item->asset_id = $request->asset_id;
        $item->user_id = 1;
        $item->contract_type_id = $request->contract_type_id;
        $item->total_loan = $request->total_loan;
        $item->interest_payment_period = $request->interest_payment_period;
        $item->interest_rate = $request->interest_rate;
        $item->date_paid = $request->date_paid;
        $item->note = $request->note;
        if ($request->hasFile('images')) {
            $images = [];
            foreach( $request->file('images') as $image) {
                $images[] = $this->uploadFile($image, 'uploads');
            }
            $item->image = json_encode($images);
        }
        if ($request->hasFile('customer_image')) {
            $item->customer_image = $this->uploadFile($request->file('customer_image'), 'uploads');
        }
        try {
            $item->save();
            SystemLog::addLog('Contract','store',$item->id);
            return redirect()->route('contracts.index')->with('success', __('sys.store_item_success'));
        } catch (QueryException $e) {
            Log::error($e->getMessage());
            return redirect()->route('contracts.index')->with('error', __('sys.store_item_error'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $item = Contract::findOrFail($id);
            SystemLog::addLog('Contract','store',$item->id);
            return redirect()->route('contracts.index')->with('success', __('sys.store_item_success'));
        } catch (\ModelNotFoundException $e) {
            Log::error($e->getMessage());
            return redirect()->route('contracts.index')->with('error', __('sys.store_item_error'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $item = Contract::findOrFail($id);
            $params = [
                'item' => $item
            ];
            return view("admin.contracts.add", $params);
        } catch (ModelNotFoundException $e) {
            Log::error($e->getMessage());
            return redirect()->route('contracts.index')->with('error', __('sys.item_not_found'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContractRequest $request,$id)
    {
        try {
            $item = Contract::findOrFail($id);
            $item->name = $request->name;
            $item->save();
            SystemLog::addLog('Contract','update',$item->id);
            return redirect()->route('contracts.index')->with('success', __('sys.update_item_success'));
        } catch (ModelNotFoundException $e) {
            Log::error($e->getMessage());
            return redirect()->route('contracts.index')->with('error', __('sys.item_not_found'));
        } catch (QueryException  $e) {
            Log::error($e->getMessage());
            return redirect()->route('contracts.index')->with('error', __('sys.update_item_error'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $item = Contract::findOrFail($id);
            $item->delete();
            SystemLog::addLog('Contract','destroy',$item->id);
            return redirect()->route('contracts.index')->with('success', __('sys.destroy_item_success'));
        } catch (\ModelNotFoundException $e) {
            Log::error($e->getMessage());
            return redirect()->route('contracts.index')->with('error', __('sys.item_not_found'));
        } catch (\QueryException  $e) {
            Log::error($e->getMessage());
            return redirect()->route('contracts.index')->with('error', __('sys.destroy_item_error'));
        }
    }
}
