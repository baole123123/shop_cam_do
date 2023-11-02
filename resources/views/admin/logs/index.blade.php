@extends('admin.layouts.master')
@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Trang chủ /</span> Lịch sử hệ thống
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
                    <select name="user_id" class="form-select text-capitalize">
                        <option value="">Tất cả</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" @selected(request()->user_id == $user->id) >{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <select id="limit" name="limit" class="form-select text-capitalize">
                        <option @selected(request()->limit == 10) value="10">10</option>
                        <option @selected(request()->limit == 20) value="20">20</option>
                        <option @selected(request()->limit == 30) value="30">30</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <button class="btn btn-primary">
                        <i class="bx bx-search"></i>
                    </button>
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
                        <th>Tên nhân viên</th>
                        <th>Nội dung</th>
                        <th>Ngày</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($items as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->created_at }}</td>
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