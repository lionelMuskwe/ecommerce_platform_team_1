@extends("../general/master")

@section("title")
    Delivery Details
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
@endsection

@section("content")
    <div class="container" style="padding-top: 50px; padding-bottom: 50px">
        <form action="" method="POST">
            <div class="form-group">
                <label for="">Deliver To</label>
                <input type="text" class="form-control" name="deliver-to" placeholder="Name"><br>
            </div>
            <div class="form-group">
                <label for="">Delivery Address</label><br>
                <input type="text" class="form-control" name="street-address" placeholder="Street Address">
                <input type="text" class="form-control" name="street-address2" placeholder="Street Address Line 2">
                <input type="text" class="form-control" name="city" placeholder="City">
                <input type="text" class="form-control" name="postcode" placeholder="Postal / Zip Code">
            </div>
        </form>
    </div>
@endsection