@extends("../general/master")

@section("title")
    Products
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/products.css')}}">
@endsection

@section("content")


<body>
    <style>

    body{
    background-color:whitesmoke;
    font-family: Arial, Helvetica, sans-serif;
    box-sizing: border-box;
    margin: 0;
    padding:0;
    background: lightgray;
    }
               
    </style>
</body>


    {{-- Content goes in this section --}}

    <div class="product-container">

        <div class="centre">
            <div class="card">
                <img src="{{ asset('images') }}/{{ $products->image}}" alt="" height="450" width="350">
                <div class="card-title">
                    <h3>View details</h3>
                </div>
                <div class="card-details">
                    <h1>{{$products['title']}}</h1>
                    <p>Price: £{{$products['price']}}</p>
                    <p>Author: {{$products['author']}}</p>
                    <p>ISBN: {{$products['ISBN']}}</p>
                    <p>Date Published: {{$products['date_published']}}</p>
                    <p>Publisher: {{$products['publisher']}}</p>
                </div>

                

            </div>
        </div>

                <div class="product-details">
                    <p>{{$products['description']}}</p>
                    <p>Price: £{{$products['price']}}</p>
                    <p>Author: {{$products['author']}}</p>
                    <div class="submit"
                    <form>
                        <p><button class ="submit"><span>Add to Cart</span></button></p>
                    </form>
            </div>
        </div>


    </div>






@endsection()

