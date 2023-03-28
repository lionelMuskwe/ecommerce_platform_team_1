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
            <input type="inventory-id" name="inventory-id">

            <label for="category-id">Category Id:</label>
            <select class="form-select" style="height: 30px; width:200px" name="category" id="category">
                <option value="1">Ficton</option>
                <option value="2">Motivation</option>
                <option value="3">Thriller</option>
                <option value="4">Dystopian</option>
                <option value="5">Romance</option>
                <option value="6">Fantasy</option>
                <option value="7">Crime</option>
            </select><br><br>

            <button type="submit" id="submit-button">Add Product</button><br><br>


        </form>
    </div>

    <script defer src="{{asset('js/add-product.js')}}"></script>
@endsection()

