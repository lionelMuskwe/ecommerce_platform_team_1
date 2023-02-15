@extends("../general/master")

@section("title")
    SignUp
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/signup.css')}}">
@endsection

@section("content")
    {{-- Content goes in this section --}}
    <h1>Make an account</h1>

    <form action="/signup" method="POST">
        @csrf
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" placeholder="First Name"></br>
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" placeholder="Second Name"></br>
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Email"></br>
        <label for="password">Password</label>
        <input type="text" name="password" placeholder="Password"></br>
        <label for="c_password">Confirm Password</label>
        <input type="text" name="c_password" placeholder="Password"></br><br>
        <button>Register</button><br>
    </form>

    <div class="bottom_section">
        <a href="{{route('login')}}">Already have an account with us? Log in now! </a>
    </div>
@endsection()

