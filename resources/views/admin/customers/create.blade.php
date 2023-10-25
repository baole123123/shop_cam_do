@extends('admin.layouts.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Thêm Mới /</span><span> Khách Hàng</span>
    </h4>
    <form action="{{route('customers.store')}}" method="POST">
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
                            <div class="mb-3">
                                <label class="form-label" for="ecommerce-customer-name">Tên</label>
                                <input type="text" class="form-control" placeholder="Tên" name="name" value="{{ old('name') }}">
                                @error('name') <div class="alert alert-danger">{{ $message }}</div> @enderror
                            </div>
                            <div class="row mb-3">
                                <div class="col"><label class="form-label" for="ecommerce-customer-email">Email</label>
                                    <input type="text" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                                    @error('email') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="col"><label class="form-label" for="ecommerce-customer-phone">Số Điện Thoại</label>
                                    <input type="text" class="form-control" placeholder="0123-4567" name="phone" value="{{ old('phone') }}">
                                    @error('phone') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="ecommerce-customer-address">Địa chỉ</label>
                                    <input type="text" class="form-control" placeholder="Địa Chỉ" name="address" value="{{ old('address') }}">
                                    @error('address') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="ecommerce-customer-address">Trạng thái</label>
                                    <input type="text" class="form-control" placeholder="Trạng Thái" name="status" value="{{ old('status') }}" style="width: 630px;">
                                    @error('status') <div class="alert alert-danger">{{ $message }}</div> @enderror
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
