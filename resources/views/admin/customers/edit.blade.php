@extends('admin.layouts.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Chỉnh sửa /</span><span> Khách Hàng</span>
    </h4>
    <form action="{{route('customers.update' , $item->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="app-ecommerce">
            <!-- Add Product -->
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                <div class="d-flex flex-column justify-content-center">

                </div>
                <div class="d-flex align-content-center flex-wrap gap-3">
                    <a href="{{route('customers.index')}}" class="btn btn-label-secondary">Trở Về</a>
                    <button type="submit" class="btn btn-primary">Lưu</button>

                </div>
            </div>
            <div class="row">
                <!-- First column-->
                <div class="col-12 col-lg-12">
                    <!-- Product Information -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-tile mb-0">Thông tin Khách Hàng</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-10">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Tên</label>
                                        <input type="text" class="form-control" placeholder="Tên" name="name" value="{{ $item->name }}">
                                        @error('name') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="text" class="form-control" placeholder="Email" name="email" value="{{ $item->email }}">
                                        @error('email') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label">Số Điện Thoại</label>
                                        <input type="text" class="form-control" placeholder="0123-4567" name="phone" value="{{ $item->phone }}">
                                        @error('phone') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="ecommerce-customer-address">Địa chỉ</label>
                                        <input type="text" class="form-control" placeholder="Địa Chỉ" name="address" value="{{ $item->address }}">
                                        @error('address') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label mb-1" for="status-org">Trạng thái </label>
                                        <select class="form-control" name="status">
                                            <option value="">Tất cả</option>
                                            <option @selected($item->status == 'dang_vay') value="dang_vay">Đang vay</option>
                                            <option @selected($item->status == 'ket_thuc') value="ket_thuc">Kết thúc</option>
                                            <option @selected($item->status == 'chua_co_hop_dong') value="chua_co_hop_dong">Chưa có hợp đồng</option>
                                        </select>
                                        @error('status') <div class="alert alert-danger">{{ $message }}</div> @enderror

                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label mb-1" for="status-org">Tình trạng </label>
                                        <select class="form-control" name="sitiuation">
                                            <option value="">Tất cả</option>
                                            <option @selected($item->sitiuation == 'binh_thuong') value="binh_thuong">Bình thường</option>
                                            <option @selected($item->sitiuation == 'no_xau') value="no_xau">Nợ xấu</option>
                                            <option @selected($item->sitiuation == 'no_rui_ro') value="no_rui_ro">Nợ rủi ro</option>
                                        </select>
                                        @error('sitiuation') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
