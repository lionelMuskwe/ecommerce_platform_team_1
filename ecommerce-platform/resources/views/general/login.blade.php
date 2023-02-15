@extends("../general/master")

@section("title")
    Login
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section("content")
    {{-- Content goes in this section --}}
    <h1>Log into your account below</h1>
    <br>

<form action="/login" method="POST">
    @csrf
    <label for="email">Email</label>
    <input type="text" name="email" placeholder="Email"></br>
    <label for="password">Password</label>
    <input type="text" name="password" placeholder="Password"></br>
    <p>Forgot Password? </p><br>
    <input type="checkbox" id="rem_me" name="rem_me" value="Remember">
    <label for="rem_me"> Remember Me</label><br>
    <button>Log in</button><br>
</form>

<div class="bottom_section">
    <a href="{{route('signup')}}">Don't have an account with us? Register now!</a>
</div>

@endsection()

