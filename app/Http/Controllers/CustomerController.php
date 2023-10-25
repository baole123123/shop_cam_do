<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $customers = Customer::paginate(3);
        if (isset($request->keyword)) {
            $keyword = $request->keyword;
            $customers = Customer::where('name', 'like', "%$keyword%")
            ->orWhere('phone', 'like', "%$keyword%")
            ->paginate(4);
        }


        return view('admin.customers.index', compact('customers'));
    }
    public function create()
    {
        $customers = Customer::get();
        return view('admin.customers.create' ,compact('customers'));
    }
    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->birthday = $request->birthday;
        $customer->identification = $request->identification;
        $customer->id_image_front = $request->id_image_front;
        $customer->id_image_back = $request->id_image_back;
        $customer->image_user = $request->image_user;
        $customer->status = $request->status;


        // xử lý ảnh
        $fieldName = 'image';
        if ($request->hasFile($fieldName)) {
            $fullFileNameOrigin = $request->file($fieldName)->getClientOriginalName();
            $fileNameOrigin = pathinfo($fullFileNameOrigin, PATHINFO_FILENAME);
            $extenshion = $request->file($fieldName)->getClientOriginalExtension();
            $fileName = $fileNameOrigin . '-' . rand() . '_' . time() . '.' . $extenshion;
            $path = 'storage/' . $request->file($fieldName)->storeAs('public/images', $fileName);
            $path = str_replace('public/', '', $path);
            $customer->image = $path;
        }
        $customer->save();
        return redirect()->route('customers.index');
    }
    public function edit($id)
    {
        $customers = Customer::find($id);
        return view('admin.customers.edit', compact('customers'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->birthday = $request->birthday;
        $customer->identification = $request->identification;
        $customer->id_image_front = $request->id_image_front;
        $customer->id_image_back = $request->id_image_back;
        $customer->image_user = $request->image_user;
        $customer->status = $request->status;


        // xử lý ảnh
        $fieldName = 'image';
        if ($request->hasFile($fieldName)) {
            $fullFileNameOrigin = $request->file($fieldName)->getClientOriginalName();
            $fileNameOrigin = pathinfo($fullFileNameOrigin, PATHINFO_FILENAME);
            $extenshion = $request->file($fieldName)->getClientOriginalExtension();
            $fileName = $fileNameOrigin . '-' . rand() . '_' . time() . '.' . $extenshion;
            $path = 'storage/' . $request->file($fieldName)->storeAs('public/images', $fileName);
            $path = str_replace('public/', '', $path);
            $customer->image = $path;
        }

        $customer->save();

        return redirect()->route('customers.index');
    }


    public function destroy($id)
    {
        $customers = Customer::find($id);
        if ($customers) {
            $customers->delete();
        }
        return redirect()->route('customers.index' , compact('customers'));
    }

    public function show($id)
    {
        $customer = Customer::find($id);

        return view('admin.customers.show', compact('customer'));
    }
}
