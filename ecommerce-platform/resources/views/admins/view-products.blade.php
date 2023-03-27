@extends("../general/admin-master")

@section("title")
    Product List
@endsection()

@section("links")
<link rel="stylesheet" href="{{asset('css/admin-homepage.css')}}">
@endsection

@section("content")
<h1>Product List</h1>

<table border="1">
    <tr>
        <td>Id</td>
        <td>ISBN</td>
        <td>Title</td>
        <td>Author</td>
        <td>Description</td>
        <td>Price</td>
        <td>Date Published</td>
        <td>Published</td>
        <td>Inventory ID</td>
        <td>Category ID</td>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{$product['id']}}</td>
        <td>{{$product['ISBN']}}</td>
        <td>{{$product['title']}}</td>
        <td>{{$product['author']}}</td>
        <td>{{$product['description']}}</td>
        <td>£{{$product['price']}}</td>
        <td>{{$product['date_published']}}</td>
        <td>{{$product['publisher']}}</td>
        <td>{{$product['inventory_id']}}</td>
        <td>{{$product['category_id']}}</td>
    </tr>
    @endforeach
</table>

@endsection()
