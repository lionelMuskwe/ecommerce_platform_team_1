@extends("../general/master")

@section("title")
    Login
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section("content")
    {{-- Content goes in this section --}}
    <h1>You content should go in this section</h1>
    <br>
    <p>Remember to always write clean code</p>


    <form action="/login" Method="POST">
        @csrf
        <label for = "username">Username</label>
        <input type="text" name="username"></br>
        <label for = "password">Password</label>
        <input type="text" name="password"></br>
        <button>Login</button>
    </form>

@endsection()

