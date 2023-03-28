@extends("../general/master")

@section("title")
    Delivery Details
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
@endsection

@section("content")
    <div class="container" style="padding-top: 50px; padding-bottom: 50px">
        <h1>Order Confirmation:</h1>
        <hr><br><br>
        <p>Thank you for your order. Your order number is: {{$order->confirmation_id}}</p>
        <p>Total cost: £{{$order->total}}</p>
    </div>
@endsection