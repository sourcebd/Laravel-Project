@extends('layout.main')

@section('title')
E-Pay | Customer-User List
@endsection


@section('page_title')
<h1>User List</h1>
@endsection


@section('nav_bar')
<a href="{{route('home.customer')}}">Back</a> |
<a href="{{route('logout.index')}}">Logout</a>
@endsection


@section('main_content')
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Username</td>
            <td>Password</td>
            <td>Type</td>
            <td>Action</td>
        </tr>

        @for($i=0; $i < count($list); $i++)
        <tr>
            <td>{{ $list[$i]['userId'] }}</td>
            <td>{{ $list[$i]['username'] }}</td>
            <td>{{ $list[$i]['password'] }}</td>
            <td>{{ $list[$i]['type'] }}</td>
            <td>
                <a href="{{ route('home.Cedit', [$list[$i]['userId']]) }}">Edit</a> |
                <a href="/E-Pay/home/delete/customer/{{ $list[$i]['userId'] }}">Delete</a> |
                <a href="/E-Pay/home/details/customer/{{ $list[$i]['userId'] }}">Details</a>
            </td>
        </tr>
        @endfor
    </table>
    {{session('msg')}}
@endsection