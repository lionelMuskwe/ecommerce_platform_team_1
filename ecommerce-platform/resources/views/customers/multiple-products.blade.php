@extends("../general/master")

@section("title")
Products
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/multiple-products.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
@endsection

@section("content")
<style>
h1 {
    color: blueviolet;
  }
</style>

<header>
    <h1> Our Books </h1>

    <p> Welcome to our online bookstore! Here, you'll find an extensive collection of books spanning across various genres, including fiction, non-fiction, biographies, self-help, and more. We believe that books have the power to transport us to different worlds, expand our knowledge, and inspire us to be better versions of ourselves.
        <br>
        We are passionate about books, and we aim to share that passion with you by offering a diverse selection of high-quality books at affordable prices. Whether you're a seasoned reader or just starting on your reading journey, we've got something for everyone.
        <br>
        <br>
        Our website is designed to make it easy for you to find the books you're looking for, with intuitive navigation, helpful recommendations, and detailed descriptions of each book. Plus, our secure checkout process ensures that your online shopping experience is safe and hassle-free.
        <br>
        <br>
        Thank you for choosing our bookstore for your reading needs. We hope you enjoy browsing our collection and find your next favorite book here!  </p>
</header>

<body>
            <style>
            a:link {
              color: black;
            }
            a:hover {
                color: blueviolet
            }
            a:active {
                color: dimgrey
            }
            </style>
</body>

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

        <div>
            <form action="{{ url('add-to-cart', $product->id) }}" method="POST">
                @csrf
                <input type="number" value="1" min="1" class="form-control" style="width: 60px;height:35px; text-align:center"
                    name="quantity">
                <p><button class ="submit"><span>Add to Cart</span></button></p>
            </form>
            <div class="icons"<i class="bi bi-cart4"></i></div>
        </div>
    </div>
@endforeach
@endsection()
