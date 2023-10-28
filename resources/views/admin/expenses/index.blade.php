@extends('admin.layouts.master')
@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Trang chủ /</span> Thu chi
</h4>

<!-- Product List Table -->
<div class="card">
    <!-- Alert -->
    @include('admin.includes.global.alert')
    <!-- Form search -->
    <form action="{{ route('expenses.index') }}" method="get">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <select name="contract_id" class="form-select text-capitalize">
                        <option value="">Tất cả</option>
                        @foreach($contracts as $contract)
                        <option value="{{ $contract->id }}"
                            {{ request()->contract_id == $contract->id ? 'selected' : '' }}>{{ $contract->id }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <input type="text" name="amount" value="{{ request()->amount }}" class="form-control"
                        placeholder="giá">
                </div>
                <div class="col">
                    <input type="text" name="note" value="{{ request()->note }}" class="form-control"
                        placeholder="Ghi chú">
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
                    <input type="text" name="type" value="{{ request()->type }}" class="form-control"
                        placeholder="Kiểu">
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
                        <th>Kiểu</th>
                        <th>Hợp Đồng</th>
                        <th>Giá(VNĐ)</th>
                        <th>Ghi chú</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($items as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->contract_id }}</td>
                        <td>{{ $item->amount }}</td>
                        <td>{{ $item->note }}</td>

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