<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\AssetType;
use App\Models\Asset;
use App\Models\Contract;
use App\Models\Log as SystemLog;
use App\Http\Requests\StoreContractRequest;
use App\Http\Requests\UpdateContractRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use App\Traits\UploadFileTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContractController extends Controller
{
    use UploadFileTrait;
    // Trả góp
    public function index(Request $request)
    {
        $query = Contract::select('*');
        $query->contract_type_id = Contract::CAMDO;
        $query->orderBy('id', 'DESC');
        $limit = $request->limit ? $request->limit : 10;
        if ( $request->status_name) {
            $query->where('status', 'LIKE', "%$request->status_name%");
        }
        if ($request->name_phone) {
            $query->where('customer_name', 'LIKE', "%$request->name_phone%")
                ->orWhere('customer_phone', 'LIKE', "%$request->name_phone%");
        }
        if ($request->time && in_array($request->time, ['tat_ca', 'tuan_nay', 'thang_nay', 'nam_nay'])) {
            $dateRanges = [
                'tat_ca' => [null, null],
                'tuan_nay' => [date("Y-m-d", strtotime("this week")), date("Y-m-d", strtotime("this week +6 days"))],
                'thang_nay' => [date("Y-m-01"), date("Y-m-t")],
                'nam_nay' => [date("Y-01-01"), date("Y-12-31")]
            ];
            [$startDate, $endDate] = $dateRanges[$request->time];
            $query = Contract::query();
            if ($startDate && $endDate) {
                $query->whereBetween('created_at', [$startDate, $endDate]);
            }
        }
        $items = $query->paginate($limit);
        $params = [
            'items' => $items
        ];
        return view("admin.contracts.index", $params);
    }
    public function create()
    {
        $assets = AssetType::get();
        $customers = Customer::get();
        $params = [
            'assets' => $assets,
            'customers' => $customers,
            'type' => [
                    0 => 'Cầm đồ',
                    1 => 'Trả góp'
            ],
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
        $item->contract_type_id = Contract::CAMDO;
        $item->customer_phone = $request->customer_phone;
        $item->customer_name = $request->customer_name;
        $item->customer_identi = $request->customer_identi;
        $item->customer_birthday = $request->customer_birthday;
        if ($request->hasFile('customer_image')) {
            $item->customer_image = $this->uploadFile($request->file('customer_image'), 'uploads');
        }
        $item->user_id = Auth::id();
        $item->total_loan = $request->total_loan;
        $item->interest_payment_period = $request->interest_payment_period;
        $item->interest_rate = $request->interest_rate;
        $item->date_paid = $request->date_paid;
        $item->note = $request->note;
        $item->status = 'Đang vay';

        
        
        try {

            // Xử lý thêm khách hàng
            if (!$request->customer_id) {
                $customer = new Customer();
                $customer->name = $request->customer_name;
                $customer->phone = $request->customer_phone;
                $customer->save();

                $request->customer_id = $customer->id;
            }
            $item->customer_id = $request->customer_id;
            $item->save();


            // xử lý thêm tài sản
            $asset = new Asset();
            $asset->contract_id = $item->id;
            $asset->asset_type_id = $request->asset_type_id;
            $asset->name = $request->asset_imei;
            $asset->description = $request->asset_password;
            $asset->description .= '|'.$request->asset_number;
            $asset->description .= '|'.$request->asset_note;
            if ($request->hasFile('images')) {
                $images = [];
                foreach ($request->file('images') as $image) {
                    $images[] = $this->uploadFile($image, 'uploads');
                }
                $asset->images = json_encode($images);
            }
            $asset->save();

            SystemLog::addLog('Contract', 'store', $item->id);
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
            $assets = AssetType::get();
            $item = Contract::findOrFail($id);
            $params = [
                'assets' => $assets,
                'item' => $item,
                'success' => __('sys.store_item_success'),
                'type' => [
                    0 => 'Cầm đồ',
                    1 => 'Trả góp'
                ]
            ];
            return view("admin.contracts.show", $params);
        } catch (ModelNotFoundException $e) {
            Log::error($e->getMessage());
            return redirect()->route('contracts.index')->with('error', __('sys.store_item_error'));
        }
    }
    public function edit($id)
    {
        try {
            $asset_types = AssetType::get();
            $item = Contract::findOrFail($id);
            $asset = $item->asset;
            $params = [
                'asset_types' => $asset_types,
                'asset' => $asset,
                'item' => $item
            ];
            return view("admin.contracts.edit", $params);
        } catch (ModelNotFoundException $e) {
            Log::error($e->getMessage());
            return redirect()->route('contracts.index')->with('error', __('sys.item_not_found'));
        }
    }
    public function update(UpdateContractRequest $request, $id)
    {
        $item = Contract::findOrFail($id);
        $item->customer_id = 1;
        $item->contract_type_id = Contract::CAMDO;
        $item->customer_phone = $request->customer_phone;
        $item->customer_name = $request->customer_name;
        $item->customer_identi = $request->customer_identi;
        $item->customer_birthday = $request->customer_birthday;
        if ($request->hasFile('customer_image')) {
            $item->customer_image = $this->uploadFile($request->file('customer_image'), 'uploads');
        }
        $item->user_id = Auth::id();
        $item->total_loan = $request->total_loan;
        $item->interest_payment_period = $request->interest_payment_period;
        $item->interest_rate = $request->interest_rate;
        $item->date_paid = $request->date_paid;
        $item->note = $request->note;
        if ($item->isOverdue()) {
            $item->status = 'da_qua_han';
        } else {
            $item->status = 'dang_vay';
        }
        
        try {

            // Xử lý thêm khách hàng
            if (!$request->customer_id) {
                $customer = new Customer();
                $customer->name = $request->customer_name;
                $customer->phone = $request->customer_phone;
                $customer->save();

                $request->customer_id = $customer->id;
            }

            $item->customer_id = $request->customer_id;
            $item->save();

            // xử lý thêm tài sản
            if (empty($item->asset)) {
                $asset = new Asset();
            } else {
                $asset = $item->asset;
            }
            $asset->contract_id = $item->id;
            $asset->asset_type_id = $request->asset_type_id;
            $asset->name = $request->asset_imei;
            $asset->description = $request->asset_password;
            $asset->description .= '|'.$request->asset_number;
            $asset->description .= '|'.$request->asset_note;
            
            if ($request->hasFile('images')) {
                $images = [];
                foreach ($request->file('images') as $image) {
                    $images[] = $this->uploadFile($image, 'uploads');
                }
                $item->image = json_encode($images);
            }
        
            $asset->save();


            SystemLog::addLog('Contract', 'store', $item->id);
            return redirect()->route('contracts.index')->with('success', __('sys.update_item_success'));
        } catch (QueryException $e) {
            Log::error($e->getMessage());
            return redirect()->route('contracts.index')->with('error', __('sys.update_item_error'));
        }
    }
    public function destroy($id)
    {
        try {
            $item = Contract::findOrFail($id);
            $item->delete();
            SystemLog::addLog('Contract', 'destroy', $item->id);
            return redirect()->route('contracts.index')->with('success', __('sys.destroy_item_success'));
        } catch (ModelNotFoundException $e) {
            Log::error($e->getMessage());
            return redirect()->route('contracts.index')->with('error', __('sys.item_not_found'));
        } catch (QueryException $e) {
            Log::error($e->getMessage());
            return redirect()->route('contracts.index')->with('error', __('sys.destroy_item_error'));
        }
    }
    public function overdue(Request $request)
    {
        $query = Contract::select('*')->where('status', 'Đã quá hạn');
        $query->orderBy('id', 'DESC');
        $limit = $request->limit ? $request->limit : 10;
        if ($request->name_phone) {
            $query->where('customer_name', 'LIKE', "%$request->name_phone%")
                ->orWhere('customer_phone', 'LIKE', "%$request->name_phone%");
        }
        if ($request->time && in_array($request->time, ['tat_ca', 'tuan_nay', 'thang_nay', 'nam_nay'])) {
            $dateRanges = [
                'tat_ca' => [null, null],
                'tuan_nay' => [date("Y-m-d", strtotime("this week")), date("Y-m-d", strtotime("this week +6 days"))],
                'thang_nay' => [date("Y-m-01"), date("Y-m-t")],
                'nam_nay' => [date("Y-01-01"), date("Y-12-31")]
            ];
            [$startDate, $endDate] = $dateRanges[$request->time];
            $query = Contract::query();
            if ($startDate && $endDate) {
                $query->whereBetween('created_at', [$startDate, $endDate]);
            }
        }
        if ( $request->status_name) {
            $query->where('status', 'LIKE', "%$request->status_name%");
        }
        $items = $query->paginate($limit);
        $params = [
            'items' => $items
        ];
        return view("admin.contracts.overdue", $params);
    }
}
