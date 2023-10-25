@extends('admin.layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2 style="text-align: center;">Users</h2>
  <form action="{{route('user.store')}}" method='post'>
    @csrf
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter name" name="name">
      @error('name')
         <div style="color: red">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="pwd">Email:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter email" name="email">
      @error('description')
      <div style="color: red">{{ $message }}</div>
   @enderror
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="password">
        <div class="form-group">
            <label for="pwd">Phone:</label>
            <input type="text" class="form-control" id="pwd" placeholder="Enter phone" name="phone">
            <div class="form-group">
                <label for="pwd">Address:</label>
                <input type="text" class="form-control" id="pwd" placeholder="Enter address" name="address">
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
@endsection
