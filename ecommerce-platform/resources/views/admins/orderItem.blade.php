@extends("../general/admin-master")

@section("title")
    Order Item
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/admin-homepage.css')}}">
@endsection

@section("content")
    {{-- Content goes in this section --}}
<h1>Order Item</h1>

@foreach ($orderItems as $item)
    <p>Id: {{$item['id']}}</p>
    <p>Product ID: {{$item['product_id']}}</p>
    <p>Quantity: {{$item['quantity']}}</p>
@endforeach

@endsection()
