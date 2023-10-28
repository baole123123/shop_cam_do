<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Expenses;
use App\Models\Contracts;

class ExpenseController extends Controller
{
    public function index(Request $request)
    {
        $query = Expenses::select('*');
        $limit = $request->limit ? $request->limit : 10;
        if ($request->type) {
            $query->where('type', 'LIKE', "%$request->type%");
        }
        if ($request->contract_id) {
            $query->where('contract_id', 'LIKE', "%$request->contract_id%");
        }
        if ($request->amount) {
            $query->where('amount', 'LIKE', "%$request->amount%");
        }
        if ($request->note) {
            $query->where('note', 'LIKE', "%$request->note%");
        }
        $query->orderBy('id', 'DESC');
        $items = $query->paginate($limit);

        $contracts = Contracts::all();
        $params = [
            'items' => $items,
            'contracts' => $contracts,
        ];
        // dd($params);
        return view("admin.expenses.index", $params);
    }
}
