@extends("../general/admin-master")

@section("title")
    Order List
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/admin-homepage.css')}}">
@endsection

@section("content")
    {{-- Content goes in this section --}}
<h1>Order List</h1>

<table border="1">
    <tr>
       <td>ID</td>
       <td>User ID</td>
       <td>Total</td>
       <td>Status</td>
       <td>Confirmation ID</td>
    </tr>
    @foreach($orderDetails as $orderDetail)
    <tr>
       <td><a href="{{route('order-detail', ['id'=>$orderDetail['id']])}}">{{$orderDetail['id']}}</a></td>
       <td>{{$orderDetail['user_id']}}</td>
       <td>{{$orderDetail['total']}}</td>
       <td>{{$orderDetail['status']}}</td>
       <td>{{$orderDetail['confirmation_id']}}</td>
    </tr>
    @endforeach
</table>

@endsection()


