@extends('admin.layouts.master')

@section('content')
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Thêm mới /</span><span> Hợp đồng</span>
    </h4>
    <form action="{{ route('contracts.store') }}" method='post' enctype="multipart/form-data">
        @csrf
        <div class="app-ecommerce">

            <!-- Add Product -->
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                <div class="d-flex flex-column justify-content-center">
                </div>
                <div class="d-flex align-content-center flex-wrap gap-3">
                    <a href="{{ route('contracts.index') }}" class="btn btn-label-secondary">Quay lại</a>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </div>

            </div>

            <div class="row">

                <!-- First column-->
                <div class="col-12 col-lg-12">
                    <!-- Product Information -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-tile mb-0">Thông tin khách vay</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col"><label class="form-label">Tên</label>
                                    <input type="text" class="form-control" placeholder="Tên khách vay" name="customer_name" value="{{ old('customer_name') }}">
                                    @error('customer_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="col"><label class="form-label">Số điện thoại</label>
                                    <input type="text" class="form-control" placeholder="Số điện thoại khách vay" name="customer_phone" value="{{ old('customer_phone') }}">
                                    @error('customer_phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col"><label class="form-label">Ngày sinh</label>
                                    <input type="date" class="form-control" placeholder="Ngày sinh" name="customer_birthday" value="{{ old('customer_birthday') }}">
                                    @error('customer_birthday')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="col"><label class="form-label">Số CCCD</label>
                                    <input type="text" class="form-control" placeholder="Số CCCD" name="customer_identi" value="{{ old('customer_identi') }}">
                                    @error('customer_identi')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="mb-3"><label class="form-label">Ảnh </label>
                                <input type="file" name="customer_image" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- /Product Information -->
                    <!-- Media -->
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 card-title">Thông tin cho vay</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col">
                                <label class="form-label">Tài sản thế chấp</label>
                                <select name="asset_id" class="form-select">
                                    <option value="">Vui lòng chọn</option>
                                    @foreach($assets as $index => $asset)
                                        <option value="{{ $asset->id }}">{{ $asset->name }}</option>
                                    @endforeach
                                </select>
                                </div>
                                <div class="col"><label class="form-label">Loại hợp đồng</label>
                                    <select name="contract_type_id" class="form-select">
                                        <option value="">Vui lòng chọn</option>
                                        <option value="0">Cầm đồ</option>
                                        <option value="1">Trả góp</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col"><label class="form-label">Tổng tiền vay</label>
                                    <input type="text" class="form-control" placeholder="Tổng tiền vay" name="total_loan" value="{{ old('total_loan') }}">
                                    @error('total_loan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="col"><label class="form-label">Kỳ đóng lãi</label>
                                    <input type="text" class="form-control" placeholder="Kỳ đóng lãi" name="interest_payment_period" value="{{ old('interest_payment_period') }}">
                                    @error('interest_payment_period')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col"><label class="form-label">Lãi suất/tháng</label>
                                    <input type="text" class="form-control" placeholder="Lãi suất/tháng" name="interest_rate" value="{{ old('interest_rate') }}">
                                    @error('interest_rate')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="col"><label class="form-label">Ngày trả</label>
                                    <input type="date" class="form-control" placeholder="Ngày trả" name="date_paid" value="{{ old('date_paid') }}">
                                    @error('date_paid')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label">Ghi chú</label>
                                        <textarea name="note" class="form-control" placeholder="Ghi chú" cols="30" rows="5"></textarea>
                                </div>
                                <div class="col">
                                    <label class="form-label">Ảnh đính kèm</label>
                                        <input type="file" name="images[]" multiple class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
