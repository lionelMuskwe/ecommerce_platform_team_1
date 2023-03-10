@extends("../general/master")

@section("title")
SIGN UP
@endsection()

@section("links")

@endsection

@section("content")
{{-- Content goes in this section --}}

<body>

    <form action="" method="POST">
    @csrf
    <label for="">Card Number</label>
    <input type="text" name="account_number" placeholder="Card Number"><br>
    <label for="">Sort Code</label>
    <input type="text" name="sort_code" placeholder="Enter Sort Code"><br>
    <label for="">Expiration Date</label>
    <input type="date" name="expiration_date"><br>
    <button type="submit">Checkout</button>
    </form>

</body>

@endsection()
