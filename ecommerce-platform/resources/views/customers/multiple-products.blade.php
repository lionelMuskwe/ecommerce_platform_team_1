@extends("../general/master")

@section("title")
Products
@endsection()

@section("links")
<link rel="stylesheet" href="{{asset('css/multiple-products.css')}}">
@endsection

@section("content")

<h1> Products </h1>
@foreach ($products as $product)
<a href="{{ route('product.detail', ['id' => $product['id']]) }}">{{$product['title']}}</a>

<form action="{{ url('add-to-cart', $product->id) }}" method="POST">
    @csrf
    <input type="number" value="1" min="1" class="form-control" style="width: 60px;height:35px; text-align:center"
        name="quantity">
    <p><button type ="submit" >Add to Cart</button></p>
</form>

@endforeach
@endsection()