@extends("../general/admin-master")


@section("links")
<link rel="stylesheet" href="{{asset('css/admin-complaints.css')}}">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

@endsection

@section("title")
Customer Complaints
@endsection()


@section("content")

<div class="container mt-5">
    <h2 class="text-center mb-4">Customer Complaints</h2>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Customer Email</th>
                <th scope="col">Complaint Title</th>
                <th scope="col">Complaint Description</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody style="background white">
            <tr>
                <th scope="row">1</th>
                <td>John Doe</td>
                <td>JohnDoe12@gmail.com</td>
                <td>Damaged Product</td>
                <td>The product I received was damaged.</td>
                <td><span class="badge badge-warning">Pending</span></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jane Smith</td>
                <td>JaneySmithy@gmail.com</td>
                <td>Delayed Delivery</td>
                <td>The delivery was delayed by a week.</td>
                <td><span class="badge badge-danger">Rejected</span></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Mike Johnson</td>
                <td>Mikey54@gmail.com</td>
                <td>Customer Service</td>
                <td>The customer service was not helpful.</td>
                <td><span class="badge badge-success">Resolved</span></td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Lisa Brown</td>
                <td>Lissybrown@gmail.com</td>
                <td>Product Unavailable</td>
                <td>The product I wanted was out of stock.</td>
                <td><span class="badge badge-warning">Pending</span></td>
            </tr>
        </tbody>
    </table>
</div>
<!-- Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

@endsection()