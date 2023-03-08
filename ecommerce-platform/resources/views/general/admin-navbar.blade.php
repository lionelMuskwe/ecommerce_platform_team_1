<nav>
    <a href="{{ url('/admin-home') }}">Home</a>
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
            <a href="{{ url('/admin-add-employee') }}">Add Employee</a>
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