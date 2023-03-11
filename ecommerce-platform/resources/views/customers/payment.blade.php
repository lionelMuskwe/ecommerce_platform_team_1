@extends("../general/master")

@section("title")
Payment
@endsection()

@section("links")

@endsection

@section("content")
{{-- Content goes in this section --}}

<body>

    <form action="/paymentDetails" method="POST" id="paymentForm">
    @csrf
    <label for="">Card Number</label>
    <input type="text" name="account_number" id="account_number" placeholder="Card Number"><br>
    <label for="">CVV</label>
    <input type="text" name="cvv" id="cvv" placeholder="cvv"><br>
    <label for="">Expiration Date</label>
    <input type="text" name="expiration_date" id = "expiration_date"><br>
    <button type="submit">Checkout</button>
    </form>

    <script>
        const paymentForm = document.getElementById("paymentForm");

        paymentForm.addEventListener("submit", function(event){
            event.preventDefault();

            const accountNumber = document.getElementById("account_number").value;
            const cvvCode = document.getElementById("cvv").value;
            const expirationDate = document.getElementById("expiration_date").value;

            const accountNumberRegex = /^[0-9]{16}$/;
            const cvvRegex = /^[0-9]{3}$/;

            if (!accountNumberRegex.test(accountNumber)) {
              alert("Card Number must contain 16 digits");
              return false;
            }

            if (!cvvRegex.test(cvvCode)) {
              alert("CVV number must contain 3 digits");
              return false;
            }

            window.location.href="/home";
        });
    </script>

</body>

@endsection()
