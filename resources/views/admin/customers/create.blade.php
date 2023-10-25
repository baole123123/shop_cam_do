@extends('admin.layouts.master')


@section('content')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('customers.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <h3> Thêm khách hàng</h3>
        <label for="fname">Tên:</label><br>
        <input type="text" id="fname" name="name"><br>

        <label for="lname">Email:</label><br>
        <input type="text" id="lname" name="email"><br>

        <label for="lname">SDT:</label><br>
        <input type="text" id="lname" name="phone"><br>


        <label for="lname">Địa chỉ:</label><br>
        <input type="text" id="lname" name="address"><br><br>

        <label for="lname">Ngày sinh:</label><br>
        <input type="date" id="lname" name="birthday"><br><br>

        <label for="lname">CCCD:</label><br>
        <input type="file" id="lname" name="identification"><br><br>

        <label for="lname">Ảnh mặt trước:</label><br>
        <input type="file" id="lname" name="id_image_front"><br><br>

        <label for="lname">Ảnh mặt sau:</label><br>
        <input type="file" id="lname" name="id_image_back"><br><br>

        <label for="lname">Ảnh chân dung:</label><br>
        <input type="file" id="lname" name="image_user"><br><br>

        <label for="lname">Trạng thái:</label><br>
        <input type="text" id="lname" name="status"><br><br>



        <a href="{{ route('customers.index') }}" class="btn">Hủy</a>

        <input type="submit" value="Submit">
    </form>

</body>

</html>
@endsection
