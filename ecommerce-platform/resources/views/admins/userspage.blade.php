@extends("../general/admin-master")

@section("title")
    User List
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/admin-homepage.css')}}">
@endsection

@section("content")
    {{-- Content goes in this section --}}
<h1>User List</h1>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Username</td>
        <td>Firstname</td>
        <td>Lastname</td>
        <td>Age</td>
        <td>Address</td>
        <td>Telephone</td>
        <td>Role</td>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['username']}}</td>
        <td>{{$user['firstname']}}</td>
        <td>{{$user['lastname']}}</td>
        <td>{{$user['age']}}</td>
        <td>{{$user['address']}}</td>
        <td>{{$user['telephone']}}</td>
        
        @if ($user['role'] == 1)
            <td>Employee</td>
        @elseif ($user['role'] == 2)
            <td>Administrator</td>
        @else
            <td>Customer</td>
        @endif

    </tr>
    @endforeach
</table>
@endsection()


