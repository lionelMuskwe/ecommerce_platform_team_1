@extends("../general/admin-master")

@section("title")
    Order Item
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/admin-homepage.css')}}">
@endsection

@section("content")
    {{-- Content goes in this section --}}
<h1>Order Item</h1>



    <table border = "1">
        <tr>
            <td>ID</td>
            <td>Product ID</td>
            <td>Quantity</td>
        </tr>
        @foreach ($orderItems as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['product_id']}}</td>
            <td>{{$item['quantity']}}</td>
        </tr>
        @endforeach
    </table>


@endsection()
