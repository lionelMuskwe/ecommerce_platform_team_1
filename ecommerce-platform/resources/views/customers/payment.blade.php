@extends("../general/master")

@section("title")
Payment
@endsection()

@section("links")

@endsection

@section("content")
{{-- Content goes in this section --}}

    {{-- <form action="" method="POST" id="paymentForm"> --}}
    <form action="{{route('payment-details-submit')}}" method="POST" id="paymentForm" onsubmit="return validatePaymentDetails()">
      @csrf
      <label for="">Card Number</label>
      <input type="text" name="account_number" value="1252689578456325" id="account_number" placeholder="Card Number"><br>

      <label for="">CVV</label>
      <input type="text" name="cvv" value="123" id="cvv" placeholder="cvv"><br>

      <label for="">Expiration Date</label>
      <input type="text" name="expiration_date" value="09/32" id ="expiration_date"><br>

      <button type="submit" id="submit-button">Checkout</button>
    </form>


    <script defer src="{{asset('js/payment.js')}}"></script>

@endsection()
