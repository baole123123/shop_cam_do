@extends('admin.layouts.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Xem chi tiết /</span><span> Khách hàng</span>
    </h4>
    <div class="app-ecommerce">
        <!-- Add Product -->
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
            <div class="d-flex flex-column justify-content-center">
            </div>
            <div class="d-flex align-content-center flex-wrap gap-3">
                <a href="{{ route('customers.index') }}" class="btn btn-label-secondary">Trở về</a>
                <!-- <a href="#" class="btn btn-primary">Trả lãi</a> -->
            </div>
        </div>
        <div class="row">
            <!-- First column-->
            <div class="col-12 col-lg-12">
                <!-- Product Information -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Thông tin khách hàng</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <td rowspan="5" width="20%">
                                    @if ($item->image_user)
                                    <div style="height: 100%;">
                                        <img src="{{ asset($item->image_user) }}" alt="Ảnh cũ" style="width: 100%; height: 100%;">
                                    </div>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Họ và tên</th>
                                <td>{{ $item->name }}</td>
                            </tr>
                            <tr>
                                <th>Số điện thoại</th>
                                <td>{{ $item->phone }}</td>
                            </tr>
                            <tr>
                                <th>Địa chỉ</th>
                                <td>{{ $item->address }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $item->email }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 card-title">Thông tin khác</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th width="50%">Ảnh CCCD</th>
                                <td rowspan="1" width="10%">
                                    @if ($item->identification)
                                    <div style="height: 100%;">
                                        <img src="{{ asset($item->identification) }}" alt="Ảnh cũ" style="width: 100%; height: 100%;">
                                    </div>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Ảnh mặt trước</th>
                                <td rowspan="1" width="10%">
                                    @if ($item->id_image_front)
                                    <div style="height: 100%;">
                                        <img src="{{ asset($item->id_image_front) }}" alt="Ảnh cũ" style="width: 100%; height: 100%;">
                                    </div>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Ảnh mặt sau</th>
                                <td rowspan="1" width="10%">
                                    @if ($item->id_image_back)
                                    <div style="height: 100%;">
                                        <img src="{{ asset($item->id_image_back) }}" alt="Ảnh cũ" style="width: 100%; height: 100%;">
                                    </div>
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
