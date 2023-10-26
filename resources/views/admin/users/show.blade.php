@extends('admin.layouts.master')
@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <h2 style="text-align: center;">Show</h2>
        <a href="{{ route('users.index', ['item' => $item->id]) }}">
            <button class="btn btn-primary">
                <i class='bx bx-arrow-back'></i>
            </button>
        </a>
        <table style="width:100%;text-align:center;" border="2">
            <tr>
                <th>Name</th>
                <th>Emai</th>
                <th>Phone</th>
                <th>Address</th>
            </tr>
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->phone }}</td>
                <td>{{ $item->address }}</td>
            </tr>
        </table>
        </body>

    </html>
@endsection
