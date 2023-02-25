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
        <td>{{$user['role']}}</td>
    </tr>
    @endforeach
</table>
