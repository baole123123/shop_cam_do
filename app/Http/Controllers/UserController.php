<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::get();
        return view('admin.users.index',compact('users'));
    }
    public function create() {
        return view('admin.users.create');
    }
    public function store(Request $request) {
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->phone = $request->phone;
        $users->address = $request->address;
        $users->save();
        return redirect()->route('users.index')->with('status','Thêm thành công');
    }
    public function edit($id) {
        $users = User::find($id);
        return view('admin.users.edit',compact('users'));
    }
    public function update(Request $request, $id) {
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        if ($request->password) {
            $users->password = Hash::make($request->password);
        }
        $users->phone = $request->phone;
        $users->address = $request->address;
        $users->save();
        return redirect()->route('users.index')->with('status','Sửa thành công');
    }
    public function show($id) {
        $users = User::find($id);
        return view('admin.users.show',compact('users'));
    }
    public function destroy($id) {
        $users = User::destroy($id);
        return redirect()->route('users.index',compact('users'));
    }
}
