@extends('admin.layouts.master')

@section('content')
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Thêm mới /</span><span> Cho vay</span>
    </h4>
    <form action="{{ route('pawns.update',$item->id) }}" method='post' enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="app-ecommerce">

            <!-- Add Product -->
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                <div class="d-flex flex-column justify-content-center">
                </div>
                <div class="d-flex align-content-center flex-wrap gap-3">
                    <a href="{{ route('pawns.index') }}" class="btn btn-label-secondary">Quay lại</a>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
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
                                    <input type="text" class="form-control" placeholder="Tên khách vay" name="customer_name" value="{{ $item->customer_name }}">
                                    @error('customer_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col"><label class="form-label">Số điện thoại</label>
                                    <input type="text" class="form-control" placeholder="Số điện thoại khách vay" name="customer_phone" value="{{ $item->customer_phone }}">
                                    @error('customer_phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col"><label class="form-label">Ngày sinh</label>
                                    <input type="date" class="form-control" placeholder="Ngày sinh" name="customer_birthday" value="{{ $item->customer_birthday }}">
                                    @error('customer_birthday')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="col"><label class="form-label">Số CCCD</label>
                                    <input type="text" class="form-control" placeholder="Số CCCD" name="customer_identi" value="{{ $item->customer_identi }}">
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
                                <div class="col"><label class="form-label">Tổng tiền vay</label>
                                    <input type="text" class="form-control" placeholder="Tổng tiền vay" name="total_loan" value="{{ $item->total_loan }}">
                                    @error('total_loan')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                            </div>
                            <div class="row mb-3">
                                <div class="col"><label class="form-label">Lãi tổng</label>
                                    <input type="text" class="form-control" placeholder="Lãi tổng" name="interest_rate" value="{{ $item->interest_rate }}">
                                    @error('interest_rate')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label">Ghi chú</label>
                                    <textarea name="note" class="form-control" placeholder="Ghi chú" >{{ $item->note }}</textarea>
                                </div>
                               
                            </div>
                        </div>
                    </div>

                   
                </div>
            </div>
        </div>
    </form>
@endsection
