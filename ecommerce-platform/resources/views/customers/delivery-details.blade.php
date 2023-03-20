@extends("../general/master")

@section("title")
    Delivery Details
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
    <script src="{{asset('js/deliverypage.js')}}"></script>
@endsection

@section("content")
    <div class="container" style="padding-top: 50px; padding-bottom: 50px">
        <form action="" method="POST" style="padding:100px" id="deliveryForm">
            @csrf
            <div class="form-group">
                <label for="">Deliver To</label>
                <input type="text" class="form-control" name="deliver-to" placeholder="Name" id="name" required><br>
            </div>
            <div class="form-group">
                <label for="">Delivery Address</label><br>
                <input type="text" class="form-control" name="street-address" placeholder="Street Address" id="address1" required>
                <input type="text" class="form-control" name="street-address2" placeholder="Street Address Line 2" id="address2" required>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="city" placeholder="City" id="city" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="postcode" placeholder="Postal / Zip Code" id="postcode" required>
                    </div>
                </div>
                <input type="text" class="form-control" name="delivery-instructions" placeholder="Delivery Instructions" id="deliveryInstructions">
            </div>
            <br>
            <button type="submit" id="submitButton" class="btn btn-primary">Proceed</button>
        </form>
    </div>
@endsection