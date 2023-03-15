@extends("../general/master")

@section("title")
    Product Details
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/detailed-product.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
@endsection

@section("content")
    {{-- Content goes in this section --}}

<div class="centre">
    <div class="card">
        <img src="{{ asset('images') }}/{{ $products->image}}" alt="" height="450" width="350">
        <div class="card-title">
            <h3>{{$products['title']}}</h3>
        </div>
        <div class="submit">
            {{-- <form action="{{ url('add-to-cart', $product->id) }}" method="POST"> --}}
                <form>
                @csrf
                <input type="number" value="1" min="1" class="form-control" style="width: 60px;height:35px; text-align:center"
                    name="quantity">
                <p><button class ="submit"><span>Add to Cart</span></button></p>
            </form>
            <div class="icons"<i class="bi bi-cart4"></i></div>
            <div class="details">
                <p>Price: £{{$products['price']}}</p>
                <p>Author: {{$products['author']}}</p>
                <p>Description: {{$products['description']}}</p>
            </div>
        </div>
    </div>
</div>







<h1>{{$products['title']}}</h1>
<img src="{{ asset('images') }}/{{ $products->image}}" alt="" height="250" width="150">
<p>ISBN: {{$products['ISBN']}}</p>
<p>Price: £{{$products['price']}}</p>
<p>Author: {{$products['author']}}</p>
<p>Description: {{$products['description']}}</p>
<p>Date Published: {{$products['date_published']}}</p>
<p>Publisher: {{$products['publisher']}}</p>


@endsection()

