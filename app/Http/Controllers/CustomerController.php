<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Log as SystemLog;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use App\Traits\UploadFileTrait;

class CustomerController extends Controller
{
    use UploadFileTrait;
    public function index(Request $request)
    {
        $query = Customer::select('*');
        if (isset($request->s)) {
            $query->where('name', 'like', "%$request->s%")
                ->orWhere('phone', 'like', "%$request->s%");
        }
        if ($request->sitiuation) {
            $query->where('sitiuation', 'LIKE', "%$request->sitiuation%");
        }
        if ($request->status) {
            $query->where('status', 'LIKE', "%$request->status%");
        }
        $query->orderBy('id', 'DESC');
        $items = $query->paginate(3);
        $params = [
            'items' => $items,
        ];
        return view("admin.customers.index", $params);
    }
    public function create()
    {
        $customers = Customer::get();
        return view('admin.customers.create', compact('customers'));
    }
    public function store(StoreCustomerRequest $request)
    {
        // dd($request->all());
        $item = new Customer();
        // Save to fields
        $item->name = $request->name;
        $item->email = $request->email;
        $item->phone = $request->phone;
        $item->address = $request->address;
        $item->birthday = $request->birthday;
        $item->identification = $request->identification;
        $item->id_image_front = $request->id_image_front;
        $item->id_image_back = $request->id_image_back;
        $item->image_user = $request->image_user;
        $item->status = $request->status;
        $item->sitiuation = $request->sitiuation;



        // xử lý ảnh
        if ($request->hasFile('identification')) {
            $item->identification = $this->uploadFile($request->file('identification'), 'uploads');
        }
        if ($request->hasFile('id_image_front')) {
            $item->id_image_front = $this->uploadFile($request->file('id_image_front'), 'uploads');
        }
        if ($request->hasFile('id_image_back')) {
            $item->id_image_back = $this->uploadFile($request->file('id_image_back'), 'uploads');
        }
        if ($request->hasFile('image_user')) {
            $item->image_user = $this->uploadFile($request->file('image_user'), 'uploads');
        }
        //...
        try {
            $item->save();
            SystemLog::addLog('Customer', 'store', $item->id);
            return redirect()->route('customers.index')->with('success', __('sys.store_item_success'));
        } catch (QueryException $e) {
            Log::error($e->getMessage());
            return redirect()->route('customers.index')->with('error', __('sys.store_item_error'));
        }
    }
    public function edit($id)
    {
        try {
            $item = Customer::findOrFail($id);
            $params = [
                'item' => $item
            ];
            return view("admin.customers.edit", $params);
        } catch (ModelNotFoundException $e) {
            Log::error($e->getMessage());
            return redirect()->route('customers.index')->with('error', __('sys.item_not_found'));
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $item = Customer::findOrFail($id);
            $data = $request->all();

            // Kiểm tra và cập nhật ảnh chỉ khi có sự thay đổi
            if ($request->hasFile('identification')) {
                $data['identification'] = $this->uploadFile($request->file('identification'), 'uploads');
            }

            if ($request->hasFile('id_image_front')) {
                $data['id_image_front'] = $this->uploadFile($request->file('id_image_front'), 'uploads');
            }

            if ($request->hasFile('id_image_back')) {
                $data['id_image_back'] = $this->uploadFile($request->file('id_image_back'), 'uploads');
            }

            if ($request->hasFile('image_user')) {
                $data['image_user'] = $this->uploadFile($request->file('image_user'), 'uploads');
            }

            $item->update($data);

            SystemLog::addLog('Customer', 'update', $item->id);
            return redirect()->route('customers.index')->with('success', __('sys.update_item_success'));
        } catch (ModelNotFoundException $e) {
            Log::error($e->getMessage());
            return redirect()->route('customers.index')->with('error', __('sys.item_not_found'));
        } catch (QueryException $e) {
            Log::error($e->getMessage());
            return redirect()->route('customers.index')->with('error', __('sys.update_item_error'));
        }
    }


    public function destroy($id)
    {
        try {
            $item = Customer::findOrFail($id);
            $item->delete();
            SystemLog::addLog('Customer', 'destroy', $item->id);
            return redirect()->route('customers.index')->with('success', __('sys.destroy_item_success'));
        } catch (ModelNotFoundException $e) {
            Log::error($e->getMessage());
            return redirect()->route('customers.index')->with('error', __('sys.item_not_found'));
        } catch (QueryException  $e) {
            Log::error($e->getMessage());
            return redirect()->route('customers.index')->with('error', __('sys.destroy_item_error'));
        }
    }

    public function show($id)
    {
        $customer = Customer::find($id);

        return view('admin.customers.show', compact('customer'));
    }
}
