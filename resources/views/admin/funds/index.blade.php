<?php

use App\Models\Funds;
?>

@extends('admin.layouts.master')
@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Trang chủ /</span> Quản lý quỹ
</h4>

<!-- Product List Table -->
<div class="card">
    <!-- Alert -->
    @include('admin.includes.global.alert')
    <!-- Form search -->
    <form action="{{ route('funds.index') }}" method="get">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <input type="text" name="name" value="{{ request()->name }}" class="form-control" placeholder="Tên quỹ">
                </div>
                <div class="col">
                    <input type="text" name="amount" value="{{ request()->amount }}" class="form-control" placeholder="Tiền còn lại">
                </div>
                <div class="col-md-1">
                    <button class="btn btn-primary">
                        <i class="bx bx-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </form>

    <!-- Table -->
    <div class="card-body">
        <div class="table-responsive text-nowrap ">
            <table class="table border-top">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên quỹ</th>
                        <th>Tiền còn lại</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($items as $index => $item)
                    <tr>
                        <td>{{ $loop->index + 1 + ($items->perPage() * ($items->currentPage() - 1)) }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ number_format($item->amount, 0, '', ' ') . ' ₫'; }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    <div class="card-footer pt-1 pb-1">
        <div class="float-end">
            {{ $items->appends(request()->query())->links() }}
        </div>
    </div>

</div>
@endsection