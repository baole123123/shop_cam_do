@extends('admin.layouts.master')
@section('content')
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Sửa hợp đồng /</span><span> Hợp đồng</span>
    </h4>
    <form action="{{ route('contracts.update', $item->id) }}" method='post' enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="app-ecommerce">

            <!-- Add Product -->
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                <div class="d-flex flex-column justify-content-center">
                </div>
                <div class="d-flex align-content-center flex-wrap gap-3">
                    <a href="{{ route('contracts.index') }}" class="btn btn-label-secondary">Quay lại</a>
                    <button type="submit" class="btn btn-primary">Sửa</button>
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
                                    <input type="text" class="form-control" placeholder="Tên khách vay"
                                        name="customer_name" value="{{ $item->customer_name }}">
                                    @error('customer_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col"><label class="form-label">Số điện thoại</label>
                                    <input type="text" class="form-control" placeholder="Số điện thoại khách vay"
                                        name="customer_phone" value="{{ $item->customer_phone }}">
                                    @error('customer_phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col"><label class="form-label">Ngày sinh</label>
                                    <input type="date" class="form-control" placeholder="Ngày sinh"
                                        name="customer_birthday" value="{{ $item->customer_birthday }}">
                                    @error('customer_birthday')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col"><label class="form-label">Số CCCD</label>
                                    <input type="text" class="form-control" placeholder="Số CCCD" name="customer_identi"
                                        value="{{ $item->customer_identi }}">
                                    @error('customer_identi')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3"><label class="form-label">Ảnh </label>
                                <input type="file" name="customer_image" class="form-control"><br>
                                @if ($item->customer_image)
                                    <img src="{{ asset($item->customer_image) }}" alt="Ảnh cũ"
                                        style="width:10%; height:10%;">
                                @endif
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
                                    <select name="asset_type_id" class="form-select">
                                        @foreach ($asset_types as $asset_type)
                                            <option <?= $asset_type->id == $item->asset_type_id ? 'selected' : '' ?>
                                                value="{{ $asset_type->id }}">
                                                {{ $asset_type->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label class="form-label">Loại hợp đồng</label>
                                    <select name="contract_type_id" class="form-select">
                                        <option
                                            {{ old('contract_type_id', $item->contract_type_id) == 0 ? 'selected' : '' }}
                                            value="0">Cầm đồ</option>
                                        <option
                                            {{ old('contract_type_id', $item->contract_type_id) == 1 ? 'selected' : '' }}
                                            value="1">Trả góp</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col"><label class="form-label">Tổng tiền vay</label>
                                    <input type="text" class="form-control" placeholder="Tổng tiền vay" name="total_loan"
                                        value="{{ $item->total_loan }}">
                                    @error('total_loan')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col"><label class="form-label">Kỳ đóng lãi</label>
                                    <input type="text" class="form-control" placeholder="Kỳ đóng lãi"
                                        name="interest_payment_period" value="{{ $item->interest_payment_period }}">
                                    @error('interest_payment_period')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col"><label class="form-label">Lãi suất/tháng</label>
                                    <input type="text" class="form-control" placeholder="Lãi suất/tháng"
                                        name="interest_rate" value="{{ $item->interest_rate }}">
                                    @error('interest_rate')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col"><label class="form-label">Ngày trả</label>
                                    <input type="date" class="form-control" placeholder="Ngày trả" name="date_paid"
                                        value="{{ $item->date_paid }}">
                                    @error('date_paid')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label">Ghi chú</label>
                                    <textarea name="note" class="form-control" placeholder="Ghi chú" cols="30" rows="5">{{ $item->note }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 card-title">Thông tin tài sản thế chấp</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="label-control">IMEI</label>
                                        <input type="text" name="asset_imei" class="form-control" value="{{ $asset->name }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label class="label-control">Mật khẩu</label>
                                    <input type="text" name="asset_password" class="form-control" value="{{ $asset->description }}">
                                </div>
                                <div class="col-md-4">
                                    <label class="label-control">Số máy</label>
                                    <input type="text" name="asset_number" class="form-control" value="{{ $asset->description }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="label-control">Ghi chú</label>
                                    <textarea name="asset_note" class="form-control">{{ $asset->description }}</textarea>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Ảnh đính kèm</label>
                                    <input type="file" name="images[]" multiple class="form-control"
                                        id="uploadInput">
                                    <div id="imagePreview">
                                        @if ($item->image)
                                            @php
                                                $imageArray = json_decode($item->image);
                                            @endphp
                                            @foreach ($imageArray as $image)
                                                <img src="{{ asset($image) }}" style="width: 10%; heigh:10%;">
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
    <script>
        function previewImages() {
            var previewContainer = document.getElementById('imagePreview');
            previewContainer.innerHTML = '';

            var files = document.getElementById('uploadInput').files;
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var reader = new FileReader();

                reader.onload = function(e) {
                    var image = document.createElement('img');
                    image.src = e.target.result;
                    image.alt = 'Ảnh mới';
                    image.style.width = '10%';
                    image.style.height = '10%';
                    previewContainer.appendChild(image);
                }
                reader.readAsDataURL(file);
            }
        }

        document.getElementById('uploadInput').addEventListener('change', previewImages);
    </script>
@endsection
