<?php

namespace App\Http\Controllers;

use App\Models\Fund;
use App\Models\Log as SystemLog;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class FundController extends Controller
{
    public function index(Request $request)
    {
        $paginate = 10;
        $query = Fund::select('*');
        if (isset($request->name)) {
            $query->where('name', 'LIKE', "%$request->name%");
        }
        if (isset($request->amount)) {
            $query->where('amount', 'LIKE', "%$request->amount%");
        }

        $query->orderBy('updated_at', 'DESC');
        $items = $query->paginate($paginate);

        $params = [
            'items' => $items
        ];
        return view('admin.funds.index', $params);
    }
}
