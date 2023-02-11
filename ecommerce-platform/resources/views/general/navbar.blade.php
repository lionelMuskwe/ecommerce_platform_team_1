<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    .logo {
      width: 150px;
    }
  </style>
  <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img class="logo" src="{{ asset('images/readers-republic-logo.png') }}" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a href="{{route("home")}}">Home</a>
            <a href="products/multiple">Products</a>
            <a href="about">About Us</a>
            <a href="contact">Contact Us</a>
            <a href="basket">Basket</a></li>
            <a href="register">Signup</a></li>
            <a href="login">Login</a></li>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

</body>
</html>