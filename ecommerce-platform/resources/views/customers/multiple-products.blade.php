@extends("../general/master")

@section("title")
    Products
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/multiple-products.css')}}">
    <a href="Downloads/Blank-Image.jpg">
@endsection

@section("content")
<!DOCTYPE html>
<html>
<head>/
    <title>Product Page</title>
</head>
<body>
    <div class="product-container">
        <img src="Blank-Image.jpg" alt="Image" class= "product-image">
    {{-- Content goes in this section --}}
    <h1>You content should go in this section</h1>
    <br>
    <p>Remember to always write clean code</p>



</body>

@endsection()
    