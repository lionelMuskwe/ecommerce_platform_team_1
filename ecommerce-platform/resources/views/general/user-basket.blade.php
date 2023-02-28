@extends("../general/master")

@section("title")
    Products
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/user-basket.css')}}">
@endsection

@section("content")
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <?php
                $subtotal = 0;
            ?>
                @foreach ($cart as $cartItem)
                <?php
                    $product = DB::table('products')->where('id', $cartItem->product_id)->first();
                    $subtotal += $product->price * $cartItem->quantity;
                ?>
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="images/readers-republic-logo.png">
                                <div>
                                    <p>{{$product->title}}</p>
                                    <small>Price: £{{$product->price}}</small><br>
                                    <img src="{{ asset('images') }}/{{ $product->image }}" alt="" style="max-width:100%; height:auto">
                                    <a href="{{ route('remove-from-cart', ['id' => $product->id]) }}">Remove</a>
                                </div>
                            </div>
                        </td>
                        <td>{{$cartItem->quantity}}</td>
                        <td>£{{$product->price * $cartItem->quantity}}</td></td>
                    </tr>

                @endforeach

                <?php
                    $tax = $subtotal * 0.2;
                    $total = $subtotal + $tax;
                ?>

        </table>

            <div class="total-price">
                <table>
                    <tr>
                        <td>Subtotal</td>
                        <td>£{{number_format($subtotal, 2)}}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>£{{number_format($tax, 2)}}</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>£{{number_format($total, 2)}} </td>
                    </tr>
                    
                </table>
            </div>
            
    </div>

@endsection()