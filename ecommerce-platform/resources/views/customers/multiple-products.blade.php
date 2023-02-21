@extends("../general/master")

@section("title")
    Products
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/multiple-products.css')}}">
@endsection

@section("content")

    <h1> Products </h1>

    <table border="5">
        <tr>
            <td>Image</td>
            <td>Title</td>
            <td>Author</td>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{$product['images']}}</td>
            <td>{{$product['title']}}</td>
            <td>{{$product['author']}}</td>
        </tr>
        @endforeach
    </table>
@endsection()
