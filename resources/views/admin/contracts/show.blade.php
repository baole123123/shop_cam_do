@extends('admin.layouts.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Xem chi tiết /</span><span> Hợp đồng</span>
        </h4>
        <div class="app-ecommerce">
            <!-- Add Product -->
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                <div class="d-flex flex-column justify-content-center">
                </div>
                <div class="d-flex align-content-center flex-wrap gap-3">
                    <a href="{{ route('contracts.index') }}" class="btn btn-label-secondary">Quay lại</a>
                    <a href="#" class="btn btn-primary">Trả lãi</a>
                </div>
            </div>
            <div class="row">
                <!-- First column-->
                <div class="col-12 col-lg-12">
                    <!-- Product Information -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Thông tin khách vay</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <td rowspan="5" width="20%">
                                        @if ($item->customer_image)
                                            <div style="height: 100%;">
                                                <img src="{{ asset($item->customer_image) }}" alt="Ảnh cũ"
                                                    style="width: 100%; height: 100%;">
                                            </div>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Họ và tên</th>
                                    <td>{{ $item->customer_name }}</td>
                                </tr>
                                <tr>
                                    <th>Số điện thoại</th>
                                    <td>{{ $item->customer_phone }}</td>
                                </tr>
                                <tr>
                                    <th>Ngày sinh</th>
                                    <td>{{ $item->customer_birthday }}</td>
                                </tr>
                                <tr>
                                    <th>Số CCCD</th>
                                    <td>{{ $item->customer_identi }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 card-title">Thông tin cho vay</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th width="50%">Tài sản thế chấp</th>
                                    <td>
                                        @isset($assets)
                                            @foreach ($assets as $asset)
                                                @if ($asset->id == $item->asset_id)
                                                    {{ $asset->name }}
                                                @endif
                                            @endforeach
                                        @endisset
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Loại hợp đồng</th>
                                    <td>{{ $type[$item->contract_type_id] }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Tổng tiền vay</th>
                                    <td>{{ $item->total_loan }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Kì đóng lãi</th>
                                    <td>{{ $item->interest_payment_period }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Lãi suất/tháng</th>
                                    <td>{{ $item->interest_rate }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Ngày trả</th>
                                    <td>{{ $item->date_paid }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Ghi chú</th>
                                    <td>{{ $item->note }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Ảnh đính kèm</th>
                                    <td>
                                        @if ($item->image)
                                        @php
                                            $imageArray = json_decode($item->image);
                                        @endphp
                                        @foreach ($imageArray as $image)
                                            <img src="{{ asset($image) }}" style="width: 10%; heigh:10%;">
                                        @endforeach
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
