@extends('admin.layouts.master')

@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Trang chủ /</span> Cầm Đồ
</h4>

<!-- Product List Table -->
<div class="card">
    
    <!-- Form search -->
    <form action="" method="get">
        <div class="card-header">
            <div class="row">
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
                    <select id="ProductStatus" class="form-select text-capitalize">
                        <option value="">Tất cả</option>
                        <option value="dang_vay">Đang vay</option>
                        <option value="du_lai">Đủ lãi</option>
                        <option value="no">Nợ</option>
                        <option value="qua_han">Quá hạn</option>
                    </select>
                </div>
                <div class="col">
                    <select id="ProductStatus" class="form-select text-capitalize">
                        <option value="">Thời gian</option>
                        <option value="dang_vay">Đang vay</option>
                        <option value="du_lai">Đủ lãi</option>
                        <option value="no">Nợ</option>
                        <option value="qua_han">Quá hạn</option>
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
                            <select id="limit" class="form-select text-capitalize">
                                <option value="10">10</option>
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
                            <a href="" class="btn btn-primary">
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
                        <th>ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <!-- foreach( $items as $item ) -->
                    <tr>
                        <td>1</td>
                        <td>
                            <div class="d-flex">
                                <div class="avatar me-1">
                                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/ecommerce-images/product-9.png" class="rounded-2">
                                </div>
                                <div class="td-info">
                                    <h6 class="text-body mb-0">Tên</h6>
                                    <small class="text-muted text-truncate d-none d-sm-block">Air Jordan is a line of basketball shoes produced by Nike</small>
                                </div>
                            </div>
                        </td>
                        <td>Category 1</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- endforeach -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    <div class="card-footer">
        {{ $items->appends(request()->query())->links() }}
    </div>

</div>
@endsection