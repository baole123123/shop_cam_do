<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Log as SystemLog;
use App\Http\Requests\StoreContractRequest;
use App\Http\Requests\UpdateContractRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = Contract::select('*');
        $query->orderBy('id', 'DESC');
        $items = $query->paginate(1);
        $params = [
            'items' => $items,
        ];
        return view("admin.contracts.index", $params);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $params = [
            
        ];
        return view("admin.contracts.create", $params);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContractRequest $request)
    {
        $item = new Contract();

        // Save to fields
        $item->name = $request->name;
        //...
        try {
            $item->save();
            SystemLog::addLog('Contract','store',$item->id);
            return redirect()->route('contracts.index')->with('success', __('sys.store_item_success'));
        } catch (\QueryException $e) {
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
    public function edit(Contract $contract)
    {
        try {
            $item = Contract::findOrFail($id);
            $params = [
                'item' => $item
            ];
            return view("admin.contracts.add", $params);
        } catch (\ModelNotFoundException $e) {
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
            // Save to fields
            $item->name = $request->name;
            //...
            $item->save();
            SystemLog::addLog('Contract','update',$item->id);
            return redirect()->route('contracts.index')->with('success', __('sys.update_item_success'));
        } catch (\ModelNotFoundException $e) {
            Log::error($e->getMessage());
            return redirect()->route('contracts.index')->with('error', __('sys.item_not_found'));
        } catch (\QueryException  $e) {
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
