<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Contract;
use Illuminate\Http\Request;
use App\Models\Log as SystemLog;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreAssetRequest;
use App\Http\Requests\UpdateAssetRequest;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use App\Traits\UploadFileTrait;

class AssetController extends Controller
{
    use UploadFileTrait;

    public function index(Request $request)
    {
        $paginate = 10;
        $query = Asset::select('*');
        if (isset($request->name)) {
            $query->where('name', 'LIKE', "%$request->name%");
        }
        if (isset($request->contract_id)) {
            $query->where('contract_id', 'LIKE', "%$request->contract_id%");
        }
        if (isset($request->asset_type_id)) {
            $query->where('asset_type_id', $request->asset_type_id);
        }
        if (isset($request->status)) {
            $query->where('status', $request->status);
        }

        $query->orderBy('updated_at', 'DESC');
        $items = $query->paginate($paginate);
        return view('admin.assets.index', ['items' => $items]);
    }

    // public function create()
    // {
    //     return view("admin.assets.create");
    // }

    public function store(StoreAssetRequest $request)
    {
        $item = new Asset();
        $item->name = $request->name;
        $item->asset_type_id = $request->asset_type_id;
        $item->status = $request->status;
        $item->contract_id = $request->contract_id;
        $item->description = $request->description;
        $item->images = $request->images;

        if (isset($request->contract_id) && !empty($request->contract_id)) {
            $contract = Contract::find($request->contract_id);
            if (empty($contract)) {
                $errors = new MessageBag();
                $errors->add('contract_id', 'Mã hợp đồng không tồn tại');

                return redirect()->back()->withErrors($errors)->withInput();
            }
        }

        if ($request->hasFile('images')) {
            $item->images = $this->uploadFile($request->file('images'), 'uploads');
        }

        try {
            $item->save();
            SystemLog::addLog('Asset', 'store', $item->id);
            return redirect()->route('asset.index')->with('success', __('sys.store_item_success'));
        } catch (QueryException $e) {
            if ($item->images) {
                $this->deleteFile([$item->images]);
            }
            Log::error($e->getMessage());
            return redirect()->route('asset.index')->with('error', __('sys.store_item_error'));
        }
    }

    public function show(string $id)
    {
        try {
            $item = Asset::findOrFail($id);
            $params = [
                'item' => $item
            ];
            return view("admin.assets.show", $params);
        } catch (ModelNotFoundException $e) {
            Log::error($e->getMessage());
            return redirect()->route('asset.index')->with('error', __('sys.item_not_found'));
        }
    }

    public function edit(string $id)
    {
        try {
            $item = Asset::findOrFail($id);
            $params = [
                'item' => $item
            ];
            return view("admin.assets.edit", $params);
        } catch (ModelNotFoundException $e) {
            Log::error($e->getMessage());
            return redirect()->route('assets.index')->with('error', __('sys.item_not_found'));
        }
    }

    public function update(UpdateAssetRequest $request, string $id)
    {
        try {
            $item = Asset::findOrFail($id);
            // Save to fields
            $item->name = $request->name;
            $item->asset_type_id = $request->asset_type_id;
            $item->status = $request->status;
            $item->contract_id = $request->contract_id;
            $item->description = $request->description;

            if (isset($request->contract_id) && !empty($request->contract_id)) {
                $contract = Contract::find($request->contract_id);
                if (empty($contract)) {
                    $errors = new MessageBag();
                    $errors->add('contract_id', 'Mã hợp đồng không tồn tại');

                    return redirect()->back()->withErrors($errors)->withInput();
                }
            }

            if ($request->hasFile('images')) {
                $item->images = $this->uploadFile($request->file('images'), 'uploads');
            }

            $item->save();
            SystemLog::addLog('Asset', 'update', $item->id);
            return redirect()->route('asset.index')->with('success', __('sys.update_item_success'));
        } catch (\ModelNotFoundException $e) {
            Log::error($e->getMessage());
            return redirect()->route('asset.index')->with('error', __('sys.item_not_found'));
        } catch (\QueryException  $e) {
            Log::error($e->getMessage());
            return redirect()->route('asset.index')->with('error', __('sys.update_item_error'));
        }
    }

    public function destroy(string $id)
    {
        try {
            $item = Asset::findOrFail($id);
            $item->delete();
            SystemLog::addLog('Asset', 'destroy', $item->id);
            return redirect()->route('asset.index')->with('success', __('sys.destroy_item_success'));
        } catch (ModelNotFoundException $e) {
            Log::error($e->getMessage());
            return redirect()->route('asset.index')->with('error', __('sys.item_not_found'));
        } catch (QueryException  $e) {
            Log::error($e->getMessage());
            return redirect()->route('asset.index')->with('error', __('sys.destroy_item_error'));
        }
    }
}
