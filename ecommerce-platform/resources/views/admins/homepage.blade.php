@extends("../general/master")

@section("title")
    Admin Home
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/admin-homepage.css')}}">
@endsection

@section("content")
    <div>
        <h1>Welcome {{$user -> firstname}}!</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column">
                        <p>Add a Product to the Database!<p>
                        <a href="{{ route('admin-add-product') }}"><button type="button" class="btn btn-primary mt-auto">Add</button></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column">
                        <p>Add an Employee user to the Database!<p>
                            <a href="{{ route('admin-add-employee') }}"><button type="button" class="btn btn-primary mt-auto">Add</button></a>
                        </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column">
                        <p>View All users!<p>
                        <button type="button" class="btn btn-primary mt-auto">View</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column">
                        <p>View all Products!<p>
                        <button type="button" class="btn btn-primary mt-auto">View</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()

