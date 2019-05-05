<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
            <a href="#">About Us</a>
            <a href="#">Contactanos</a>
          </div>
      </div>
      <div class="centro">
        <img src="imgs/21645.png" alt="" class="img-header">
      </div>
      <div class="header-der">
        @auth
        <div class="dropdown">
          <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name}}
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">My Profile</a>
            <a class="dropdown-item" href="#">Another action</a>
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
        <button type="button" class="btn btn-secondary" style="background-color:#E5E7E9;color:black;margin-right:10px;" name="button" onclick="document.getElementById('modal-wrapper').style.display='block'">Login</button>
        <button type="button" class="btn btn-secondary "style="background-color:#E5E7E9;color:black;" name="button"><a href="{{ route('register')}}">Register</a> </button>
        @endguest
        @endif
      </div>
    </div>
  </body>
</html>
