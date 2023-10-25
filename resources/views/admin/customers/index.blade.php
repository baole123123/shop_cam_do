@extends('admin.layouts.master')


@section('content')

<form action="{{ route('customers.index') }}" method="GET">
    <input type="text" name="keyword" placeholder="Nhập...">
    <button type="submit">Search</button> <br> <br>

    <a href="{{ route('customers.create') }}" class="btn btn-add">Thêm mới</a>
    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
        <h6 class="text-white text-capitalize ps-3">Danh sách khách hàng</h6>
    </div>

    <div class="table-responsive p-0">
        <table>
            <tr>
                <th>TT</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Số Điện Thoại</th>
                <th>Địa chỉ</th>
                <th>Ngày sinh</th>
                <th>CCCD</th>
                <th>Ảnh mặt trước</th>
                <th>Ảnh mặt sau</th>
                <th>Ảnh chân dung</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
            @foreach ($customers as $key => $customer)
            <tr>
                <td> {{ $key + 1 }}</td>
                <td>{{ $customer->name}}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->phone }}</td>
                <td>{{ $customer->address }}</td>
                <td>{{ $customer->birthday }}</td>
                <td><img width="90px" height="90px" src="{{ asset($customer->identification) }}" alt=""></td>
                <td><img width="90px" height="90px" src="{{ asset($customer->id_image_front) }}" alt=""></td>
                <td><img width="90px" height="90px" src="{{ asset($customer->id_image_back) }}" alt=""></td>
                <td><img width="90px" height="90px" src="{{ asset($customer->image_user) }}" alt=""></td>
                <td>{{ $customer->status }}</td>



                <!-- <td><img width="90px" height="90px" src="{{ asset($customer->image) }}" alt=""></td> -->

                <td>
                <div class="btn-group">
                        <a href="{{ route('customers.edit',$customer->id) }}">
                            <button type="button" class="btn btn-primary">Sửa</button>
                        </a>
                        <a href="{{ route('customers.show',$customer->id) }}">
                            <button type="button" class="btn btn-success mb-2">Xem</button>
                        </a>
                        <form method="POST" action="{{ route('customers.destroy',$customer->id) }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa ?')">Xóa</button>


                        </form>


                    </div>
                </td>

            </tr>
            @endforeach
        </table>
    </div>



    <div class="card-footer">
        <nav class="float-right">
            {{ $customers->appends(request()->query())->links('pagination::bootstrap-4') }}
        </nav>
    </div>

    @endsection
    <style>
    /* CSS cho bảng */
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }

    /* CSS cho nút sửa và xóa */
    .btn {
        padding: 5px 10px;
        border: none;
        border-radius: 3px;
        color: #FF0000;
        cursor: pointer;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
    }

    .btn-danger {
        background-color: #dc3545;
        color: #fff;
    }

    /* CSS cho nút thêm mới */
    .btn-add {
        padding: 5px 10px;
        border: none;
        border-radius: 3px;
        background-color: #f44336;
        color: #fff;
        cursor: pointer;
    }

    tr:hover {
        background-color: #E6E6E6;
        transition: background-color 0.3s;
    }

    tr:hover td {
        transform: scale(1.1);
        transition: transform 0.3s;
    }

    .card-footer {
        background-color: #f8f9fa;
        border-top: 1px solid #dee2e6;
        padding: 0.75rem 1.25rem;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .pagination {
        display: inline-block;
       margin: 0;
        padding: 0;
    }

    .pagination li {
        display: inline;
    }

    .pagination li a {
        color: #007bff;
        padding: 0.25rem 0.5rem;
        text-decoration: none;
        background-color: blue;
        /* Màu nền của ô phân trang */
    }

    .pagination li.active a {
        background-color: #007bff;
        color: #fff;
    }

    .pagination li.disabled a {
        color: #6c757d;
        pointer-events: none;
    }

    .btn-add {
        padding: 5px 10px;
        border: none;
        border-radius: 3px;
        background-color: red;
        color: #fff;
        cursor: pointer;
    }
</style>
