<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="{{ asset('images/logo.png') }}" alt="Readers Republic Logo" class="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="d-flex">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/multiple-products') }}">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/about-us') }}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/contact-us') }}">Contact Us</a>
          </li>
        </ul>

        <form class="form-inline my-2 my-lg-0" action="{{ url('/search') }}" method="GET">
  <div class="input-group" style="width: 375px;">
    <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search Book title, author, and ISBNs" aria-label="Search">
    <div class="input-group-append">
      <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
    </div>
  </div>
</form>



        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
  <a class="nav-link" href="{{ url('/user-basket') }}">
    <i class="fas fa-shopping-basket"></i>
  </a>
</li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="accountDropdown">
              <ul class="list-unstyled">
                @if (auth()->check() != null)
                  <li>
                    <a class="dropdown-item" href="">Hello {{ auth()->user()->firstname }}</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="{{ url('/signout') }}">Sign Out</a>
                  </li>
                @else
                  <li>
                    <a class="dropdown-item" href="{{ url('/login') }}">Log In</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="{{ url('/signup') }}">Sign Up</a>
                  </li>
                @endif
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $('.dropdown').hover(function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(300);
    }, function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(300);
    });
  });
</script>
</body>
</html>
