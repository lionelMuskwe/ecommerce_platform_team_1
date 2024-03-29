<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>
        @yield("title")
    </title>
    {{-- Below are links to BOOTSTRAP resources + fontawesome --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/snackbar.css')}}">
    <script defer src="{{asset('js/snackbar.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/effeb5c9fd.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    @yield("links")


</head>
<body style="min-height: 100vh; display:flex; flex-direction:column">

@include('general/navbar')
    <div class="container">
      @yield('content')
    </div>

    <span hidden id="snack-bar-colour">{{ Session::get('alert-class')}}</span>
    <div id="snackbar">{{ Session::get('message')}}</div>
    
    @include("general/footer")
</body>
</html>








