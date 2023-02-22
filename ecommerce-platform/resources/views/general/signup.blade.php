@extends("../general/master")

@section("title")
    SignUp
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/signup.css')}}">
@endsection

@section("content")
    {{-- Content goes in this section --}}
    <h1>You content should go in this section</h1>
    <br>
    <p>Remember to always write clean code</p>

    <form action="/signup" method="POST">
        @csrf
        <label for="username">Username</label>
        <input type="text" name="username"></br>
        <label for="firstname">First Name</label>
        <input type="text" name="firstname"></br>
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname"></br>
        <label for="password">Password</label>
        <input type="text" name="password"></br>
        <label for="age">Age</label>
        <input type="text" name="age"></br>
        <label for="address">Address</label>
        <input type="text" name="address"></br>
        <label for="telephone">Telephone</label>
        <input type="text" name="telephone"></br>
        <button>Send</button>
    </form>

@endsection()

