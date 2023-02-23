@extends("../general/master")

@section("title")
Login
@endsection()

@section("links")
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section("content")


<body class="bg-light">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-4 bg-white m-auto rounded-top wrapper">
                <h2 class="text-center pt-3 mb-3">Login Now</h2>

                <!-- Form start -->
                <form action="/login" method="POST">
                @csrf

                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        <input type="text" name="username" class="form-control" placeholder="Username" />
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        <input type="text" name="password" class="form-control" placeholder="Password" />
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-success" style="background:purple;">Login Now</button>
                </form>
                        <p class="text-center">
                            Not registered with us? <a href="{{route('signup')}}"> Register Here </a>
                        </p>
                    </div>
            </div>
        </div>
    </div>
    </form>
</body>

@endsection()
