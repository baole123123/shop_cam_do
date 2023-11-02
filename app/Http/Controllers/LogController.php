<?php

namespace App\Http\Controllers;
use App\Models\Log;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index(Request $request)
    {
        $query = Log::select('*');
        $limit = $request->limit ? $request->limit : 10;
        if ($request->model_name) {
            $query->where('model_name', 'LIKE', "%$request->model_name%");
        }
        if ($request->object_id) {
            $query->where('object_id', 'LIKE', "%$request->object_id%");
        }
        if ($request->action_name) {
            $query->where('action_name', 'LIKE', "%$request->action_name%");
        }
        if ($request->user_id) {
            $query->where('user_id', 'LIKE', "%$request->user_id%");
        }
        $query->orderBy('id', 'DESC');
        $items = $query->paginate($limit);

        $users = User::all();
        $params = [
            'items' => $items,
            'users' => $users,
        ];
        // dd($users);
        return view("admin.logs.index", $params);
    }
}