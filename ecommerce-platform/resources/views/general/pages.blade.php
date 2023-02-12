@extends("../general/master")

@section("title")
    SignUp
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/signup.css')}}">

    <style>
        li {
            margin-left: 40px;
        }
        ul {
            font-size: 25px;
        }
    </style>
@endsection

@section("content")
    <h1>Below is a list of currently available pages</h1>
    <hr>
    <li>
        <ul>
            <a href="{{url('home')}}">Customer Homepage</a>
        </ul>
        <ul>
            <a href="{{url('admin-home')}}">Admin Homepage</a>
        </ul>
        <ul>
            <a href="{{url('employee-home')}}">Employee Homepage</a>
        </ul>
        <ul>
            <a href="{{url('about-us')}}"> About Us</a>
        </ul>
        <ul>
            <a href="{{url('contact-us')}}">Contact US</a>
        </ul>
        <ul>
            <a href="{{url('multiple-products')}}">Product page</a>
        </ul>
        <ul>
            <a href="{{url('detailed-product')}}">Detailed Product page</a>
        </ul>
        <ul>
            <a href="{{url('signup')}}">SignUp</a>
        </ul>
        <ul>
            <a href="{{url('login')}}">LogIn</a>
        </ul>
    </li>

@endsection()
