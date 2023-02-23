@extends("../general/master")

@section("title")
SIGN UP
@endsection()

@section("links")
<link rel="stylesheet" href="{{asset('css/signup.css')}}">
@endsection

@section("content")
{{-- Content goes in this section --}}

<body class="bg-light">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-4 bg-white m-auto rounded-top wrapper">
                <h2 class="text-center pt-3">Signup Now</h2>
                <p class="text-center text-muted lead mb-3">It's free and takes a minute</p>
                <!-- Form start -->
                <form action="/signup" method="POST">
                @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                        <input type="text" name="username" class="form-control" placeholder="Username" />
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                        <input type="text" name="firstname" class="form-control" placeholder="First Name" />
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                        <input type="text" name="lastname" class="form-control" placeholder="Last Name" />
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        <input type="text" name="password" class="form-control" placeholder="Password" />
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        <input type="text" name="age" class="form-control" placeholder="Age" />
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        <input type="text" name="address"class="form-control" placeholder="Address" />
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                        <input type="text" name="telephone"class="form-control" placeholder="Telephone" />
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success" style="background:purple;">Signup Now</button>
                </form>
                        <p class="text-center text-muted mt-2">
                            When You Register by Clicking Signup Button, You Agree to our <a href="#">Terms and
                                Conditions</a> and <a href="#">Privacy Policy</a>
                        </p>
                        <p class="text-center">
                            Already have an account with us? <a href="{{route('login')}}"> Login Here </a>
                        </p>
                    </div>
            </div>

        </div>
    </div>
    </form>
</body>

@endsection()
