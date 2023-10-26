{{-- @extends('admin.layouts.master')
@section('content')
<!DOCTYPE html>
<html>
<body>
  <div class="container">
<h2 style="text-align: center;">Edit</h2>

<form action="{{route('users.update',$item->id)}}" method ="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  <label for="name">Name:</label><br>
  <input style="width:100%;" type="text" id="name" name="name" value="{{$item->name}}"><br>
  <label for="email ">Email:</label><br>
  <input style="width:100%;" type="text" id="email" name="email" value="{{$item->email}}"><br>
  <label for="email ">Phone:</label><br>
  <input style="width:100%;" type="text" id="email" name="phone" value="{{$item->phone}}"><br>
  <label for="email ">Address:</label><br>
  <input style="width:100%;" type="text" id="email" name="address" value="{{$item->address}}"><br>
  <input type="submit" value="Submit">
</form>

</body>
</html> --}}






@extends('admin.layouts.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Trang chủ /</span><span> Thêm mới nhân viên</span>
    </h4>
    <form action="{{route('users.update',$item->id)}}" method='post'>
        @csrf
        @method('PUT')
        <div class="app-ecommerce">
            <!-- Add Product -->
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                <div class="d-flex flex-column justify-content-center">
                </div>
                <div class="d-flex align-content-center flex-wrap gap-3">
                    <a href="{{ route('users.index') }}" class="btn btn-label-secondary">Quay lại</a>           
                    <button type="submit" class="btn btn-primary">Sửa</button>
                </div>
            </div>
            <div class="row">
                <!-- First column-->
                <div class="col-12 col-lg-12">
                    <!-- Product Information -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-tile mb-0">Cập nhật nhân viên</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-10">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label">Tên</label>
                                        <input type="text" class="form-control"
                                            placeholder="Nhập tên" name="name" value="{{$item->name}}">
                                            @error('name') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="text" class="form-control"
                                            placeholder="Nhập email" name="email" value="{{$item->email}}">
                                            @error('email') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label">Số điện thoại</label>
                                        <input type="text" class="form-control"
                                            placeholder="Nhập số điện thoại" name="phone" value="{{$item->phone}}">
                                            @error('phone') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label">Địa chỉ</label>
                                        <input type="text" class="form-control"
                                            placeholder="Nhập địa chỉ" name="address" value="{{$item->address}}">
                                            @error('address') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label">Nhóm nhân viên</label>
                                        <select class="form-control" name="group_id">
                                            <option value="">Tất cả</option>
                                            <option @selected($item->group_id == '1') value="1">Quản trị viên</option>
                                            <option @selected($item->group_id == '2') value="2">Quản lý</option>
                                            <option @selected($item->group_id == '3') value="3">Nhân viên</option>
                                        </select>
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

@endsection

