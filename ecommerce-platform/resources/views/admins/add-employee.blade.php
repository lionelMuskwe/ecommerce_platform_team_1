@extends("../general/admin-master")

@section("title")
    Admin Home
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/admin-homepage.css')}}">
@endsection

@section("content")
    {{-- Content goes in this section --}}

    <h1 class="font-weight-bold" style="font-size: 50px">ADD EMPLOYEE</h1>
    <br>
   

    <div>
        <form action="{{route('admin-add-employee-submit')}}" method="POST">
            
            @csrf

            <label for="fname">First Name: </label>
            <input type="text" id="fname" name="fname"><br>

            <label for="surname">Surname: </label>
            <input type="text" id="surname" name="surname"><br>

            <label for="username">Username: </label>
            <input type="text" id="username" name="username"><br>

            <label for="age">Age: </label>
            <input type="text" id="age" name="age"><br>

            <label for="address">Address: </label>
            <input type="text" id="address" name="address"><br>

            <label for="telephone">Phone number: </label>
            <input type="text" id="telephone" name="telephone"><br>            

            <label for="email">Email: </label>
            <input type="email" id="email" name="email" placeholder="example@email.com"><br>

            <label for="password">Password: </label>
            <input type="password" id="password" name="password"><br>

            <label for="gender">Gender: </label>
            <select name="gender" id="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select><br>


            <button type="submit">Add employee</button>


        </form>
    </div>
@endsection()

