@extends('admin.layouts.master')
@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Trang chủ /</span> Tài sản
</h4>

<!-- Product List Table -->
<div class="card">
    <!-- Alert -->
    @include('admin.includes.global.alert')
    <!-- Form search -->
    <form action="{{ route('asset.index') }}" method="get">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <input type="text" name="name" value="{{ request()->name }}" class="form-control" placeholder="Tên tài sản">
                </div>
                <div class="col">
                    <input type="text" name="contract_id" value="{{ request()->contract_id }}" class="form-control" placeholder="Mã hợp đồng">
                </div>
                <div class="col">
                    <select name="asset_type_id" class="form-select text-capitalize">
                        <option value="">Loại tài sản</option>
                        <option value="0" {{ request()->input('asset_type_id') == '0' ? 'selected' : '' }}>Cho vay</option>
                        <option value="1" {{ request()->input('asset_type_id') == '1' ? 'selected' : '' }}>Cầm đồ</option>
                    </select>
                </div>
                <div class="col">
                    <select name="status" class="form-select text-capitalize">
                        <option value="">Trạng thái</option>
                        <option value="0" {{ request()->input('status') == '0' ? 'selected' : '' }}>Bình thường</option>
                        <option value="1" {{ request()->input('status') == '1' ? 'selected' : '' }}>Cảnh báo</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <button class="btn btn-primary">
                        <i class="bx bx-search"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-header border-top">
            <div class="row">
                <div class="col-md-3">
                    <a href="{{ route('asset.create') }}" class="btn btn-primary">
                        <i class="bx bx-plus"></i> @lang('sys.add_new')
                    </a>
                </div>
            </div>
        </div>
    </form>

    <!-- Table -->
    <div class="card-body">
        <div class="table-responsive text-nowrap ">
            <table class="table border-top">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên tài sản</th>
                        <th>Loại tài sản</th>
                        <th>Mã hợp đồng</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($items as $index => $item)
                    <?php
                        if ($item->asset_type_id == 0) {
                            $item->asset_type_id = "Cho Vay";
                        } else if ($item->asset_type_id == 1) {
                            $item->asset_type_id = "Cầm đồ";
                        }

                        if ($item->status == 0) {
                            $item->status = "Bình thường";
                        } else if ($item->status == 1) {
                            $item->status = "Cảnh báo";
                        }
                    ?>
                    <tr>
                        <td>{{ $loop->index + 1 + ($items->perPage() * ($items->currentPage() - 1)) }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->asset_type_id }}</td>
                        <td>{{ $item->contract_id }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('asset.edit',$item->id)}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <a class="dropdown-item" href="{{ route('asset.show',$item->id)}}"><i class="bx bx-show me-1"></i> Show</a>

                                    <form action="{{ route('asset.destroy',$item->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="dropdown-item"><i class="bx bx-trash me-1"></i> Delete</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    <div class="card-footer pt-1 pb-1">
        <div class="float-end">
            {{ $items->appends(request()->query())->links() }}
        </div>
    </div>

</div>
@endsection