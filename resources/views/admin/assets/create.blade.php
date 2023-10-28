<?php

use App\Models\Assets;
?>
@extends('admin.layouts.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Thêm Mới /</span><span> Tài sản</span>
    </h4>
    <form action="{{route('asset.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="app-ecommerce">
            <!-- Add Product -->
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                <div class="d-flex flex-column justify-content-center">

                </div>
                <div class="d-flex align-content-center flex-wrap gap-3">
                    <a href="{{route('asset.index')}}" class="btn btn-label-secondary">Trở Về</a>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
            </div>
            <div class="row">
                <!-- First column-->
                <div class="col-12 col-lg-12">
                    <!-- Product Information -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-tile mb-0">Thông Tin Tài Sản</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="name">Tên tài sản</label>
                                        <input type="text" class="form-control" placeholder="Tên tài sản" name="name" value="{{ old('name') }}">
                                        @error('name') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <!-- <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="asset_type_id">Loại tài sản</label>
                                        <select class="form-control" name="asset_type_id">
                                            <option value="0" {{ old('asset_type_id') == '0' ? 'selected' : '' }}>Cho vay</option>
                                            <option value="1" {{ old('asset_type_id') == '1' ? 'selected' : '' }}>Cầm đồ</option>
                                        </select>
                                        @error('asset_type_id') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div> -->
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="status">Trạng thái</label>
                                        <select class="form-control" name="status">
                                            <option value="{{ Assets::_CAM_CO }}" {{ old('status') == Assets::_CAM_CO ? 'selected' : '' }}>{{ Assets::getDescStatus(Assets::_CAM_CO) }}</option>
                                            <option value="{{ Assets::_DA_TRA }}" {{ old('status') == Assets::_DA_TRA ? 'selected' : '' }}>{{ Assets::getDescStatus(Assets::_DA_TRA) }}</option>
                                        </select>
                                        @error('status') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="contract_id">Mã hợp đồng</label>
                                        <input type="text" class="form-control" placeholder="Mã hợp đồng" name="contract_id" value="{{ old('contract_id') }}">
                                        @error('contract_id') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Mô tả</label>
                                        <input type="text" class="form-control" placeholder="Mô tả" name="description" value="{{ old('description') }}">
                                        @error('description') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="images">Hình ảnh</label>
                                        <input type="file" id="images" class="form-control" placeholder="Hình ảnh" name="images" value="{{ old('images') }}" accept="image/*" onchange="previewImage()">
                                        @error('images') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="col-9">
                                        <img id="images-preview" class="img-fluid">
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
<script>
    function previewImage() {
        var image_preview = document.getElementById('images-preview');
        var inpu_image = document.getElementById('images');
        if (inpu_image.files && inpu_image.files[0]) {
            let reader = new FileReader();

            reader.onload = function(e) {
                image_preview.src = e.target.result;
            };

            reader.readAsDataURL(inpu_image.files[0]);
        }
    }
</script>
@endsection