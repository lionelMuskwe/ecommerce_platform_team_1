@extends("../general/master")

@section("title")
    Product Details
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/detailed-product.css')}}">
@endsection

@section("content")
    {{-- Content goes in this section --}}

<h1>{{$products['title']}}</h1>
<img src="{{ asset('images') }}/{{ $products->image}}" alt="" height="200" width="100">
<p>ISBN: {{$products['ISBN']}}</p>
<p>Price: £{{$products['price']}}</p>
<p>Author: {{$products['author']}}</p>
<p>Description: {{$products['description']}}</p>
<p>Date Published: {{$products['date_published']}}</p>
<p>Publisher: {{$products['publisher']}}</p>


@endsection()

