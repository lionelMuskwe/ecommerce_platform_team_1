@extends("../general/admin.master")

@section("title")
Admin Home
@endsection()

@section("links")
<link rel="stylesheet" href="{{asset('css/admin-homepage.css')}}">
@endsection

@section("content")
<div class="container-fluid banner">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-md">
                <div class="navbar-brand">
                    READERS REPUBLIC
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> ADD PRODUCTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ADD EMPLOYEE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ORDERS</a>
                    </li>
                </ul>
            </nav>

        </div>
        <div class="col-md-8 offset-md-2 info">
            <h1 class="text-center">READERS REPUBLIC</h1>
            <p class="text-center">
                Welcome Admin
            </p>
            <a href="#" class="btn btn-md text-center">GET STARTED</a>

        </div>
    </div>
</div>

















@endsection()