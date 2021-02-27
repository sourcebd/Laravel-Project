@extends('layout.main')

@section('title')
E-Pay | User List
@endsection


@section('page_title')
<h1>User list</h1>
@endsection


@section('nav_bar')
<a href="{{route('home.customer')}}">Back</a> |
<a href="{{route('logout.index')}}">logout</a>
@endsection


@section('main_content')
    <table border="1">
        <tr>
            <td>ID</td>
            <td>USERNAME</td>
            <td>PASSWORD</td>
            <td>TYPE</td>
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
                <a href="/E-Pay-home/delete-customer/{{ $list[$i]['userId'] }}">Delete</a> |
                <a href="/E-Pay-home/details-customer/{{ $list[$i]['userId'] }}">Details</a>
            </td>
        </tr>
        @endfor
    </table>
    {{session('msg')}}
@endsection