@section("links")
<link rel="stylesheet" href="{{asset('css/admin-navbar.css')}}">
@endsection

<nav>
    <a href="{{ url('/admin-home') }}">Home</a>
    <div class="dropdown">
        <button class="dropbtn">Products</button>
        <div class="dropdown-content">
            <a href="{{url('admin-add-product')}}">Add Product</a>
            <a href="{{url('admin-productPage')}}">Product List</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Employees</button>
        <div class="dropdown-content">
            <a href="{{ url('/admin-add-employee') }}">Add Employee</a>
            <a href="{{url('employeePage')}}">Employee List</a>

        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Orders</button>
        <div class="dropdown-content">
            <a href="{{url('/OrderList')}}">Order List</a>
            <a href="{{ url('/admin-complaints') }}">Complaints</a>
            <a href="{{ url('/userspage') }}">User List</a>
        </div>
    </div>
    <a href="{{url ('home') }}">Return to site</a>
</nav>
