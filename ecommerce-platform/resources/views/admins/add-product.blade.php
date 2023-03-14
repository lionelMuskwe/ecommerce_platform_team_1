@extends("../general/admin-master")

@section("title")
    Admin Home
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/add-product.css')}}">
@endsection

@section("content")
    {{-- Content goes in this section --}}
    <br><h1 class="font-weight-bold" style="font-size: 50px">ADD PRODUCTS</h1>
    <br>

    <div class="form-group">
        <form action="{{route('admin-add-product-submit')}}" method="POST" enctype="multipart/form-data">
            
            @csrf

            <label for="ISBN">ISBN:</label>
            <input type="text" name="ISBN"><br><br>

            <label for="title">Title:</label>
            <input type="text" name="title"><br><br>

            <label for="author">Author:</label>
            <input type="text" name="author"><br><br>

            <label for="description">Description:</label>
            <input type="text" name="description" style="width:250px;height:150px;"><br><br>
            
            <label for="price">Price:</label>
            <input type="text" name="price"><br><br>

            <label for="image">Image:</label>
            <input type="file" class="form-control-file" name="image" style="font-size: medium;"><br><br>
            
            <label for="date_published">Date Published:</label>
            <input type="date" name="date-published" id="" style="font-size: large;"><br><br>

            <label for="publisher">Publisher:</label>
            <input type="text" name="publisher"><br><br>

            <label for="inventory-id">Inventory Id:</label>
            <input type="text" name="inventory-id"><br><br>

            <label for="category-id">Category Id:</label>
            <input type="text" name="category-id"><br><br><br>

            <button type="submit">Add Product</button><br><br>


        </form>
    </div>
@endsection()

