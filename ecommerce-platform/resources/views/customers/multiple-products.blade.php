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
        @endforeach
@endsection()
