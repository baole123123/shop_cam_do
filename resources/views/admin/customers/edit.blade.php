@extends('admin.layouts.master')


@section('content')

<!DOCTYPE html>
<html>
<body>
    <h2>Sửa chi tiêu</h2>
    <form action="<?php echo route('customers.update', $customers->id) ?>" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="name">Tên:</label>
        <br>
        <input type="text" id="name" name="name" value="{{$customers->name}}">
        <br>
        <label for="email">Email:</label>
        <br>
        <input type="text" id="email" name="email" value="{{$customers->email}}">
        <br>
        <label for="phone">SDT:</label>
        <br>
        <input type="text" id="phone" name="phone" value="{{$customers->phone}}">
        <br>
        <label for="address">Địa chỉ:</label>
        <br>
        <input type="text" id="address" name="address" value="{{$customers->address}}">
        <br></br>

        <label for="birthday">Ngày sinh:</label>
        <br>
        <input type="date" id="birthday" name="birthday" value="{{$customers->birthday}}">
        <br></br>
        <label for="identification">CCCD:</label>
        <br>
        <input type="text" id="identification" name="identification" value="{{$customers->identification}}">
        <br></br>
        <label for="id_image_front">Ảnh mặt trước:</label>
        <br>
        <input type="file" id="id_image_front" name="id_image_front" value="{{$customers->id_image_front}}">
        <br></br>
        <label for="id_image_back">Ảnh mặt sau:</label>
        <br>
        <input type="file" id="id_image_back" name="id_image_back" value="{{$customers->id_image_back}}">
        <br></br>

        <label for="image_user">Ảnh chân dung:</label>
        <br>
        <input type="file" id="image_user" name="image_user" value="{{$customers->image_user}}">
        <br></br>

        <label for="status">Trạng thái:</label>
        <br>
        <input type="text" id="status" name="status" value="{{$customers->status}}">
        <br></br>
  <a href="{{ route('customers.index') }}" class="btn">Hủy</a>

        <input type="submit" value="Cập nhật">
    </form>
</body>
</html>
@endsection
