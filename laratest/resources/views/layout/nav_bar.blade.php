@extends('layout.main')


@section('nav_bar')
<a href="{{route('home.Ccreate')}}">Create user</a> |
<a href="{{route('home.Cuserlist')}}">View User list</a> |
<a href="{{route('logout.index')}}">logout</a>
@endsection
