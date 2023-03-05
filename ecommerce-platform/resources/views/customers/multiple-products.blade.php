@extends("../general/master")

@section("title")
Products
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/multiple-products.css')}}">
@endsection

@section("content")
<style>
h1 {
    color: blueviolet;
  }
</style>
<h1> Products </h1>
@foreach ($products as $product)
    <!--<a href="{{ route('product.detail', ['id' => $product['id']]) }}">{{$product['title']}}</a>-->

    <div class="product-container">
        <div class="product-information">
            <img src="{{ asset('images') }}/{{ $product->image }}" alt="Image" class= "product-image" height="250" width="150">
            {{-- Content goes in this section --}}
            <div class="product-title">
            <a href="{{ route('product.detail', ['id' => $product['id']]) }}">{{$product['title']}}</a>
            </div>
            <div class="product-price">
                £{{$product['price']}}
            </div>
        </div>

        <style>
            a:link {
              color: blueviolet;
            }
            a:visited {
                color: gold;
            }
            a:hover {
                color: hotpink
            }

            a:active {
                color: dimgrey
            }
            </style>

        <div>
            <form action="{{ url('add-to-cart', $product->id) }}" method="POST">
                @csrf
                <input type="number" value="1" min="1" class="form-control" style="width: 60px;height:35px; text-align:center"
                    name="quantity">
                <p><button type ="submit" >Add to Cart</button></p>
            </form>
        </div>
    </div>
@endforeach
@endsection()
