@extends('admin.layouts.master')

@section('content')
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Hợp đồng /</span> Đã quá hạn
    </h4>

    <!-- Product List Table -->
    <div class="card">
        <!-- Alert -->
        @include('admin.includes.global.alert')
        <!-- Form search -->
        <form action="{{ route('contracts.overdue') }}" method="get">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <input type="text" name="name_phone" class="form-control" placeholder="SDT, tên khách hàng">
                    </div>
                    <div class="col">
                        <select id="ProductStatus" class="form-select text-capitalize">
                            <option value="">Tất cả</option>
                            <option value="dang_vay">Đang vay</option>
                            <option value="du_lai">Đủ lãi</option>
                            <option value="no">Nợ</option>
                            <option value="qua_han">Quá hạn</option>
                        </select>
                    </div>
                    <div class="col">
                        <select id="ProductStatus" class="form-select text-capitalize" name="time">
                            <option value="">Thời gian</option>
                            <option value="tat_ca">Tất cả</option>
                            <option value="tuan_nay">Tuần này</option>
                            <option value="thang_nay">Tháng này</option>
                            <option value="nam_nay">Năm này</option>
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
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Tên, sdt khách hàng">
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col">
                                <select name="limit" class="form-select text-capitalize">
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
                            <div class="col">
                                <a href="{{ route('contracts.create') }}" class="btn btn-primary">
                                    <i class="bx bx-plus"></i> @lang('sys.add_new')
                                </a>
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
                            <th>Tên khách hàng</th>
                            <th>Loại hợp đồng</th>
                            <th>Số tiền vay</th>
                            <th>Số tiền trả</th>
                            <th>Ngày trả</th>
                            <th>Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($items as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    <div class="d-flex">
                                        <div class="avatar me-1">
                                            <img src="{{ asset($item->customer_image) }}" class="rounded-2">
                                        </div>
                                        <div class="td-info">
                                            <h6 class="text-body mb-0">{{ $item->customer_name }}</h6>
                                            <small
                                                class="text-muted text-truncate d-none d-sm-block">{{ $item->customer_phone }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $item->contract_type_id }}</td>
                                <td>{{ $item->total_loan }}</td>
                                <td>{{ $item->interest_rate }}</td>
                                <td>{{ $item->date_paid }}</td>
                                <td>{{ $item->status }}</td>
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
