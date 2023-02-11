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
            <a href="{{url('about-us')}}"> About Us</a>
        </ul>
        <ul>
            <a href="{{url('contact-us')}}">Contact US</a>
        </ul>

    </li>

@endsection()

