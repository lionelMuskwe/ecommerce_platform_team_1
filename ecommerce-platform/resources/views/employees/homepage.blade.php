@extends("../general/master")

@section("title")
Employee Home
@endsection()

@section("links")
<link rel="stylesheet" href="{{asset('css/employee-homepage.css')}}">
@endsection

<nav>
    <a href="#">Home</a>
    <div class="dropdown">
        <button class="dropbtn">Products</button>
        <div class="dropdown-content">
            <a href="#">Product List</a>
        </div>

        <div class="dropdown">
            <button class="dropbtn">Orders</button>
            <div class="dropdown-content">
                <a href="#">Order List</a>
                <a href="#">Complaints</a>
            </div>
        </div>
</nav>

@endsection()