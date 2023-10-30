@extends('admin.layouts.master')
@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Trang chủ /</span> Lịch sử
</h4>

<!-- Product List Table -->
<div class="card">
    <!-- Alert -->
    @include('admin.includes.global.alert')
    <!-- Form search -->
    <form action="{{ route('logs.index') }}" method="get">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <input type="text" name="model_name" value="{{ request()->model_name }}" class="form-control"
                        placeholder="Tên...">
                </div>
                <div class="col">
                    <input type="text" name="object_id" value="{{ request()->object_id }}" class="form-control"
                        placeholder="Đối tượng">
                </div>
                <div class="col">
                    <input type="text" name="action_name" value="{{ request()->action_name }}" class="form-control"
                        placeholder="Tên hành động">
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
            <div class="col">
                <select name="user_id" class="form-select text-capitalize">
                    <option value="">Tất cả</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" {{ request()->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col">
                            <select id="limit" name="limit" class="form-select text-capitalize">
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                            </select>
                        </div>
                        <div class="col">
                            <div class="btn-group">
                                <button type="button" class="btn btn-label-secondary dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-export me-1"></i> Export
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item disabled" href="#">Export</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
                        <th>Tên</th>
                        <th>Đối tượng</th>
                        <th>Tên hành động</th>
                        <th>Tên nhân viên</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($items as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->model_name }}</td>
                        <td>{{ $item->object_id }}</td>
                        <td>{{ $item->action_name }}</td>
                        <td>{{ $item->user->name }}</td>
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