@extends("../general/master")

@section("title")
Payment
@endsection()

@section("links")
  <link rel="stylesheet" href="{{asset('css/payments.css')}}">
@endsection

@section("content")
  {{-- Content goes in this section --}}
  <body class="payment-page">
    <div class="section">
      <p class="section-text">Just need a few details to process your payment...</p>
    </div>
    <form action="{{route('payment-details-submit')}}" method="POST" id="paymentForm" onsubmit="return validatePaymentDetails()">
      @csrf
      <div class="form-group">
        <label for="account_number">Card Number:</label>
        <input type="text" name="account_number" value="" id="account_number" placeholder="xxxx xxxx xxxx xxxx">
      </div>

      <div class="form-group">
        <label for="cvv">CVV:</label>
        <input type="text" name="cvv" value="" id="cvv" placeholder="CVV">
      </div>

      <div class="form-group">
        <label for="expiration_date">Expiration Date:</label>
        <input type="text" name="expiration_date" value="" id ="expiration_date" placeholder="MM/YY">
      </div>

      <div class="form-group">
        <button type="submit" id="submit-button">Checkout</button>
      </div>
    </form>

    <script defer src="{{asset('js/payment.js')}}"></script>
@endsection()
