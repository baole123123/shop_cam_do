@extends('admin.layouts.master')
@section('content')
<!DOCTYPE html>
<html>
<body>
  <div class="container">
<h2 style="text-align: center;">Edit</h2>

<form action="{{route('user.update',$users->id)}}" method ="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  <label for="name">Name:</label><br>
  <input style="width:100%;" type="text" id="name" name="name" value="{{$users->name}}"><br>
  <label for="email ">Email:</label><br>
  <input style="width:100%;" type="text" id="email" name="email" value="{{$users->email}}"><br>
  <label for="email ">Phone:</label><br>
  <input style="width:100%;" type="text" id="email" name="phone" value="{{$users->phone}}"><br>
  <label for="email ">Address:</label><br>
  <input style="width:100%;" type="text" id="email" name="address" value="{{$users->address}}"><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>
@endsection
