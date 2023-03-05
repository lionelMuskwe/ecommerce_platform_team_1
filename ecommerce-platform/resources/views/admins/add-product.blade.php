@extends("../general/master")

@section("title")
    Admin Home
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/admin-homepage.css')}}">
@endsection

@section("content")
    {{-- Content goes in this section --}}
    <h1>Add products</h1>
    <br>
    {{--<p>Remember to always write clean code</p>--}}

    <div>
        <form action="{{route('admin-add-product-submit')}}" method="POST">
            
            @csrf

            <label for="ISBN">ISBN</label>
            <input type="text" name="ISBN"><br>

            <label for="title">Title</label>
            <input type="text" name="title"><br>

            <label for="author">Author</label>
            <input type="text" name="author"><br>

            <label for="description">Description</label>
            <textarea name="Text1" cols="40" rows="5"></textarea><br>

            <label for="price">Price</label>
            <input type="text" name="price"><br>

            <label for="image">Image</label>
            <input type="text" name="image"><br>
            
            <label for="date_published">Date Published</label>
            <input type="date" name="date-published" id=""><br>

            <label for="publisher">Publisher</label>
            <input type="text" name="publisher"><br>

            <label for="inventory-id">Inventory id</label>
            <input type="text" name="inventory-id"><br>

            <label for="category-id">category id</label>
            <input type="text" name="category-id"><br>

            <button type="submit">Add Product</button>


        </form>
    </div>
@endsection()

