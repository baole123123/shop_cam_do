@extends('admin.layouts.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Trang chủ /</span><span> Thêm mới nhân viên</span>
        </h4>
        <form action="{{ route('users.store') }}" method='post'>
            @csrf
            <div class="app-ecommerce">
                <!-- Add Product -->
                <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-column justify-content-center">
                    </div>
                    <div class="d-flex align-content-center flex-wrap gap-3">
                        <a href="{{ route('users.index') }}" class="btn btn-label-secondary">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </div>
                </div>
                <div class="row">
                    <!-- First column-->
                    <div class="col-12 col-lg-12">
                        <!-- Product Information -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-tile mb-0">Thêm mới nhân viên</h5>
                            </div>
                            <div class="card-body">
                                <div class="row mb-10">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Tên</label>
                                            <input type="text" class="form-control" placeholder="Nhập tên" name="name"
                                                value="{{ old('name') }}">
                                            @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control" placeholder="Nhập email" name="email"
                                                value="{{ old('email') }}">
                                            @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Số điện thoại</label>
                                            <input type="text" class="form-control" placeholder="Nhập số điện thoại"
                                                name="phone" value="{{ old('phone') }}">
                                            @error('phone')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Mật khẩu</label>
                                            <input type="text" class="form-control" placeholder="Nhập mật khẩu"
                                                name="password" value="{{ old('password') }}">
                                            @error('password')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Địa chỉ</label>
                                            <input type="text" class="form-control" placeholder="Nhập địa chỉ" name="address"
                                                value="{{ old('address') }}">
                                            @error('address')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Nhóm nhân viên</label>
                                            <select name="group_id"  class="form-control">
                                                <option value="1">Quản trị viên</option>
                                                <option value="2">Quản lý</option>
                                                <option value="3">Nhân viên</option>
                                            </select>
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
