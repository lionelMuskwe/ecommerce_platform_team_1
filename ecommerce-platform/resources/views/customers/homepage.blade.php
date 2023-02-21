@extends("../general/master")

@section("title")
    Home
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/customer-homepage.css')}}">
@endsection

@section("content")
    {{-- Content goes in this section --}}
    <h1>Hello, {{session('firstname')}}</h1>

@endsection()

