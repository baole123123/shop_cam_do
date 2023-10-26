@extends('admin.layouts.master')


@section('content')



<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Trang chủ /</span> Khách Hàng
</h4>

<!-- Product List Table -->
<div class="card">
    <div class="card-body">

        <!-- Alert -->
        @include('admin.includes.global.alert')

        <!-- Form search -->
        <form action="{{ route('customers.index') }}" method="get">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <select id="ProductStatus" name="status" class="form-select text-capitalize">
                            <option value="">Trạng Thái</option>
                            <option value="dang_vay">Đang vay</option>
                            <option value="ket_thuc">Kết thúc</option>
                            <option value="chua_co_hop_dong">Chưa có hợp đồng</option>
                        </select>
                    </div>
                    <div class="col">
                        <select id="ProductStatus" name="sitiuation" class="form-select text-capitalize">
                            <option value="">Tình Trạng</option>
                            <option value="binh_thuong">Bình thường</option>
                            <option value="no_xua">Nợ xấu</option>
                            <option value="no_rui_ro">Nợ rủi ro</option>
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
                        <input type="text" name="s" class="form-control" placeholder="Tên, sdt khách hàng">
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col">
                                <select id="limit" class="form-select text-capitalize">
                                    <option value="10">10</option>
                                    <option value="10">20</option>
                                    <option value="10">30</option>

                                </select>
                            </div>
                            <div class="col">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-label-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
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
                                <a href="{{ route('customers.create') }}" class="btn btn-primary">
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
                            <th>TT</th>
                            <th>Tên</th>
                            <th>Số Điện Thoại</th>
                            <th>Địa chỉ</th>
                            <th>Trạng thái</th>
                            <th>Tình trạng</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach( $items as $key => $customer )
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>
                                <div class="d-flex">
                                    <div class="avatar me-1">
                                        <img src="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/ecommerce-images/product-9.png" class="rounded-2">
                                    </div>
                                    <div class="td-info">
                                        <h6 class="text-body mb-0">{{ $customer->name}}</h6>
                                        <small class="text-muted text-truncate d-none d-sm-block">{{$customer->email}}</small>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $customer->phone }}</td>
                            <td>{{ $customer->address }}</td>
                            <td>{{ $customer->status }}</td>
                            <td>{{ $customer->sitiuation }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{route('customers.edit' , $customer->id)}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                        </form>

                                        <a class="dropdown-item" href="{{route('customers.show' , $customer->id)}}"><i class="bx bx-show me-1"></i> Show</a>
                                        <form method="POST" action="{{route('customers.destroy' ,$customer->id)}}">
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
