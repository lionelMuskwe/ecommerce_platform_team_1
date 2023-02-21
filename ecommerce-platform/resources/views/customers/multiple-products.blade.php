@extends("../general/master")

@section("title")
    Products
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/multiple-products.css')}}">
@endsection

@section("content")
    {{-- Content goes in this section --}}
    <h1>You content should go in this section</h1>
    <br>
    <p>Remember to always write clean code</p>
    <div style="display: inline-block">
        @foreach ($products as $product)
            <h2>{{$product->title}}</h2>
            <h3>£{{$product->price}}</h3>
            <img src="{{ asset('images') }}/{{ $product->image }}" alt="" style="width: 100px; height: 200px">
            <form action="{{ url('addToCart', $product->id) }}" method="POST">
            @csrf
            <input type="number" value="1" min="1" class="form-control" style="width: 60px;height:35px; text-align:center" name="quantity">
            <input type="submit" value="Add to Cart">
            </form>
            
        @endforeach
    </div>
    
@endsection()
