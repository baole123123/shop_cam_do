@extends('admin.layouts.master')


@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
</head>
<body>
    <div class="container">
        <form>
            <div class="form-group">
                <label for="name">Tên:</label>
                <input type="text" id="name" name="name" value="{{ $customer->name }}" readonly>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ $customer->email }}" readonly>
            </div>
            <div class="form-group">
                <label for="phone">SDT:</label>
                <input type="text" id="phone" name="phone" value="{{ $customer->phone }}" readonly>
            </div>
            <div class="form-group">
                <label for="address">Địa chỉ:</label>
                <input type="text" id="address" name="address" value="{{ $customer->address }}" readonly>
            </div>
            <div class="form-group">
                <label for="birthday">Ngày sinh:</label>
                <input type="text" id="birthday" name="birthday" value="{{ $customer->birthday }}" readonly>
            </div>
            <div class="form-group">
                <label for="identification">CCCD:</label>
                <input type="file" id="identification" name="identification" value="{{ $customer->identification }}" readonly>
            </div>
            <div class="form-group">
                <label for="id_image_front">Ảnh mặt trước:</label>
                <input type="file" id="id_image_front" name="id_image_front" value="{{ $customer->id_image_front }}" readonly>
            </div>
            <div class="form-group">
                <label for="id_image_back">Ảnh mặt sau:</label>
                <input type="file" id="id_image_back" name="id_image_back" value="{{ $customer->id_image_back }}" readonly>
            </div>
            <div class="form-group">
                <label for="image_user">Ảnh chân dung:</label>
                <input type="file" id="image_user" name="image_user" value="{{ $customer->image_user }}" readonly>
            </div>
            <div class="form-group">
                <label for="status">Trạng thái:</label>
                <input type="text" id="status" name="status" value="{{ $customer->status }}" readonly>
            </div>

                <a href="{{ route('customers.index') }}" class="btn custom-button">Quay lại</a>

            </div>
        </form>
    </div>
</body>
</html>
@endsection
