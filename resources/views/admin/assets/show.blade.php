<?php

use App\Models\Assets;
?>
@extends('admin.layouts.master')
@section('content')
<!-- The Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Large Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="{{ url('/') . '/' . $item->images }}" class="img-fluid" alt="Large Image">
            </div>
        </div>
    </div>
</div>

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Chi tiết /</span><span> Tài sản</span>
    </h4>
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
        <div class="d-flex flex-column justify-content-center">
        </div>
        <div class="d-flex align-content-center flex-wrap gap-3">
            <a href="{{route('asset.index')}}" class="btn btn-label-secondary">Trở Về</a>
        </div>
    </div>
    <div class="card">
        <div class="card-header d-flex justify-content-center">
            <h5 class="card-tile mb-0">Thông Tin Tài Sản</h5>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td><strong>Tên tài sản</strong></td>
                        <td>{{ $item->name }}</td>
                    </tr>
                    <tr>
                        <td><strong>Trạng thái</strong></td>
                        <td>
                            @if($item->status == Assets::_CAM_CO)
                            <?= Assets::getDescStatus(Assets::_CAM_CO) ?>
                            @elseif ($item->status == Assets::_DA_TRA)
                            <?= Assets::getDescStatus(Assets::_DA_TRA) ?>
                            @endif
                        </td>
                        <td><strong>Mã hợp đồng</strong></td>
                        <td>{{ $item->contract_id }}</td>
                    </tr>
                    <tr>
                        <td><strong>Mô tả</strong></td>
                        <td>{{ $item->description }}</td>
                        <td><strong>Hình ảnh</strong></td>
                        <!-- <td><img src="{{ url('/') . '/' . $item->images }}" class="w-px-40 h-auto"></td> -->
                        <td>
                            @if($item->images)
                            <a href="#" data-toggle="modal" data-target="#imageModal">
                                <img src="{{ url('/') . '/' . $item->images }}" class="w-px-40 h-auto">
                            </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection