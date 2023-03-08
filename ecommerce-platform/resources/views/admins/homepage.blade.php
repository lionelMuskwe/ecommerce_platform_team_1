@extends("../general/admin-master")

@section("title")
Admin Home
@endsection()

@section("links")
<link rel="stylesheet" href="{{asset('css/admin-homepage.css')}}">
@endsection

@section("content")


<nav>
    <a href="#">Home</a>
    <div class="dropdown">
        <button class="dropbtn">Products</button>
        <div class="dropdown-content">
            <a href="#">Add Product</a>
            <a href="#">Product List</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Employees</button>
        <div class="dropdown-content">
            <a href="{{ url('/add-employee') }}">Add Employee</a>
            <a href="#">Employee List</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Orders</button>
        <div class="dropdown-content">
            <a href="#">Order List</a>
            <a href="#">Complaints</a>
        </div>
    </div>
</nav>

<div style="margin-top:23%; text-align:center; color:white;">
    <h1 class="font-weight-bold" style="font-size: 50px">WELCOME ADMIN</h1>
    <h4>This is the admin page of Readers Republic</h4>






</div>