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
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/readers-republic-logo.png">
                        <div>
                            <p>Example Image</p>
                            <small>Price: £5.00</small><br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>£5.00</td></td>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/readers-republic-logo.png">
                        <div>
                            <p>Example Image</p>
                            <small>Price: £10.00</small><br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>£10.00</td></td>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/readers-republic-logo.png">
                        <div>
                            <p>Example Image</p>
                            <small>Price: £7.50</small><br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>£7.50</td></td>
            </tr>

        </table>

            <div class="total-price">
                <table>
                    <tr>
                        <td>Subtotal</td>
                        <td>£22.50</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>£2.50</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>£25.00</td>
                    </tr>
                    
                </table>
            </div>
            
    </div>

@endsection()