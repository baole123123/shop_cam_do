@extends('admin.layouts.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Thêm Mới /</span><span> Khách Hàng</span>
    </h4>
    <form action="{{route('customers.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="app-ecommerce">
            <!-- Add Product -->
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                <div class="d-flex flex-column justify-content-center">

                </div>
                <div class="d-flex align-content-center flex-wrap gap-3">
                    <a href="{{route('customers.index')}}" class="btn btn-label-secondary">Trở Về</a>
                    <button type="submit" class="btn btn-primary">Thêm</button>
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
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="ecommerce-customer-name">Tên</label>
                                        <input type="text" class="form-control" placeholder="Tên" name="name" value="{{ old('name') }}">
                                        @error('name') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="ecommerce-customer-email">Email</label>
                                        <input type="text" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                                        @error('email') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="ecommerce-customer-phone">Số Điện Thoại</label>
                                        <input type="text" class="form-control" placeholder="0123-4567" name="phone" value="{{ old('phone') }}">
                                        @error('phone') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="ecommerce-customer-address">Địa chỉ</label>
                                        <input type="text" class="form-control" placeholder="Địa Chỉ" name="address" value="{{ old('address') }}">
                                        @error('address') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="ecommerce-customer-identification">Ảnh CCCD</label>
                                        <input type="file" class="form-control" placeholder="Ảnh CCCD" name="identification" value="{{ old('identification') }}">
                                        @error('identification') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="ecommerce-customer-id_image_front">Ảnh mặt trước</label>
                                        <input type="file" class="form-control" placeholder="Ảnh mặt trước" name="id_image_front" value="{{ old('id_image_front') }}">
                                        @error('id_image_front') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="ecommerce-customer-id_image_back">Ảnh mặt sau</label>
                                        <input type="file" class="form-control" placeholder="Ảnh mặt sau" name="id_image_back" value="{{ old('id_image_back') }}">
                                        @error('id_image_back') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="ecommerce-customer-image_user">Ảnh chân dung</label>
                                        <input type="file" class="form-control" placeholder="Ảnh chân dung" name="image_user" value="{{ old('image_user') }}">
                                        @error('image_user') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label mb-1" for="status-org">Trạng thái </label>
                                        <select class="form-control" name="status">
                                            <option value="">Tất cả</option>
                                            <option value="dang_vay">Đang vay</option>
                                            <option value="ket_thuc">Kết thúc</option>
                                            <option value="chua_co_hop_dong">Chưa có hợp đồng</option>
                                        </select>
                                        @error('status') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label mb-1" for="status-org">Tình trạng </label>
                                        <select class="form-control" name="sitiuation">
                                            <option value="">Tất cả</option>
                                            <option value="binh_thuong">Bình thường</option>
                                            <option value="no_xau">Nợ xấu</option>
                                            <option value="no_rui_ro">Nợ rủi ro</option>
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
