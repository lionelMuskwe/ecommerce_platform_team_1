@extends("../general/master")

@section("title")
    Products
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/products.css')}}">
@endsection

@section("content")
<div class="container">
    <div class="row">
        @foreach ($products as $product)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="product-card">
                    <img class="product-image" src="{{ asset('images') }}/{{ $product->image }}" alt="" height="200" width="150">
                    <div class="product-info">
                        <h3 class="product-title">{{ $product['title'] }}</h3>
                        <p class="product-author">Author: {{ $product['author'] }}</p>
                        <p class="product-price">Price: £{{ $product['price'] }}</p>
                        <div class="dropdown">
                            <button class="dropdown-btn">Details</button>
                            <div class="dropdown-content">
                                <p>Description: {{ $product['description'] }}</p>
                                <p>ISBN: {{ $product['ISBN'] }}</p>
                                <p>Publisher: {{ $product['publisher'] }}</p>
                                <p>Date Published: {{ $product['date_published'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
