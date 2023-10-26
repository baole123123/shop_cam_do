<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\Log as SystemLog;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    public function index(Request $request) {
        $query = User::select('*');
        $limit = $request->limit ? $request->limit : 10;
        if ($request->name_email) {
            $query->where('name', 'LIKE', "%$request->name_email%")
            ->orWhere('email', 'LIKE', "%$request->name_email%");
        }
        if ($request->phone) {
            $query->where('phone', 'LIKE', "%$request->phone%");
        }
        if ($request->address) {
            $query->where('address', 'LIKE', "%$request->address%");
        }
        if ($request->group_id) {
            $query->where('group_id',$request->group_id);
        }

        $query->orderBy('id', 'DESC');
        $items = $query->paginate($limit);

        $groups = [
            0 => 'Chưa xác định',
            1 => 'Quản trị viên',
            2 => 'Quản lý',
            3 => 'Nhân viên'
        ];
        $params = [
            'items' => $items,
            'groups' => $groups
        ];
        return view("admin.users.index", $params);
    }
    public function create() {
        return view('admin.users.create');
    }
    public function store(CreateUserRequest $request) {
        $item = new User();
        $item->name = $request->name;
        $item->email = $request->email;
        $item->password = $request->password;
        $item->phone = $request->phone;
        $item->address = $request->address;
        $item->group_id = $request->group_id;
        try {
            $item->save();
            SystemLog::addLog('User','store',$item->id);
            return redirect()->route('users.index')->with('success', __('sys.store_item_success'));
        } catch (QueryException $e) {
            Log::error($e->getMessage());
            return redirect()->route('users.index')->with('error', __('sys.store_item_error'));
        }
    }
    public function edit($id) {
        try {
            $item = User::findOrFail($id);
            $params = [
                'item' => $item
            ];
            return view("admin.users.edit", $params);
        } catch (ModelNotFoundException $e) {
            Log::error($e->getMessage());
            return redirect()->route('users.index')->with('error', __('sys.item_not_found'));
        }
    }
    public function update(UpdateUserRequest $request, $id) {

        try {
            $item = User::findOrFail($id);
            // Save to fields
            $item->name = $request->name;
            $item->email = $request->email;
            if ($request->password) {
                $item->password = Hash::make($request->password);
            }
            $item->phone = $request->phone;
            $item->address = $request->address;
            $item->group_id = $request->group_id;
            $item->save();
            SystemLog::addLog('User','update',$item->id);
            return redirect()->route('users.index')->with('success', __('sys.update_item_success'));
        } catch (ModelNotFoundException $e) {
            Log::error($e->getMessage());
            return redirect()->route('users.index')->with('error', __('sys.item_not_found'));
        } catch (QueryException  $e) {
            Log::error($e->getMessage());
            return redirect()->route('users.index')->with('error', __('sys.update_item_error'));
        }
    }
    public function show($id) {
        try {
            $item = User::findOrFail($id);
            $params = [
                'item' => $item
            ];
            return view("admin.users.show", $params);
        } catch (ModelNotFoundException $e) {
            Log::error($e->getMessage());
            return redirect()->route('users.index')->with('error', __('sys.item_not_found'));
        }
    }
    public function destroy($id) {
        try {
            $item = User::findOrFail($id);
            $item->delete();
            SystemLog::addLog('User','destroy',$item->id);
            return redirect()->route('users.index')->with('success', __('sys.destroy_item_success'));
        } catch (ModelNotFoundException $e) {
            Log::error($e->getMessage());
            return redirect()->route('users.index')->with('error', __('sys.item_not_found'));
        } catch (QueryException  $e) {
            Log::error($e->getMessage());
            return redirect()->route('users.index')->with('error', __('sys.destroy_item_error'));
        }
    }
}
