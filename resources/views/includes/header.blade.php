<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/adopcion.css')}}">
    <link rel="stylesheet" href="{{asset('css/perro.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/app.js') }}" defer> </script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
</head>
  </head>
  <body>

    <div class="header">
      <div class="header-izq">
          <h3>AdpotMe</h3>
          <div class="anclas">
            <a href="{{route('home')}}">Home</a>
            <a href="#">Contactanos</a>
          </div>
      </div>
      <div class="centro">
        <img src="{{ asset('imgs/21645.png') }}" alt="" class="img-header">
      </div>
      <div class="header-der">
        @auth
        <div class="dropdown">
          <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name}}
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{route('control')}}">Control</a>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit()">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
              @csrf
            </form>
          </div>
        </div>
        </div>

        @endauth

        @if (Route::has('login'))

        @guest
        <button type="button" class="btn btn-secondary "style="background-color:#E5E7E9;color:black;" name="button"><a href="{{route('adopcion')}}">Dar en adopcion!</a> </button>
        @endguest

        @endif
      </div>
    </div>
  </body>
</html>
