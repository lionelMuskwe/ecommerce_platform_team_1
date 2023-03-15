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

        <a href = "{{route('multiple-products')}}"><button>All</button></a>
@foreach($categories as $genre)
        <a href = "{{route('product.filter', ['id' => $genre['id']])}}"><button>{{$genre['name']}}</button></a>
@endforeach


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

            <style>
            .product-container {
            position: relative;
            /* width: 50%; */
            }


            .product-image {
                opacity: 1;
                display: block;
                transition: .5s ease;
                backface-visibility: hidden;
            }

            .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%)
            }

            .product-container:hover .product-image{
                opacity: 0.3;
            }

            .product-container:hover .image {
            opacity: 0.3;
            }

            .text {
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            padding: 16px 32px;
            }

            </style>
</body>


@foreach ($products as $product)
    <!--<a href="{{ route('product.detail', ['id' => $product['id']]) }}">{{$product['title']}}</a>-->


        <div class="product-container">



        <div class="col-lg-4">
                    <div class="product-information">
                    <a href="{{ route('product.detail', ['id' => $product['id']]) }}"><img src="{{ asset('images') }}/{{ $product->image }}" alt="Image" class= "product-image" height="250" width="150"></a>
                    {{-- Content goes in this section --}}
                    </div>
                    {{-- <div class="container"
                        <div class="middle">
                            <div class="text">TEXT</div>
                        </div> --}}


            <div class="product-title">
                <a href="{{ route('product.detail', ['id' => $product['id']]) }}">{{$product['title']}}</a>
            </div>

            <div class="product-price">
                    £{{$product['price']}}
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
    </div>



@endforeach
@endsection()
