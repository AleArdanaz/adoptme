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

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

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
        @if (Route::has('login'))
        @auth

            <a id="username" class="btn btn-secondary header-item" href="{{ route('logout') }}" style="color:Black;background-color:#E5E7E9;" onclick="event.preventDefault();document.getElementById('logout-form').submit()" onmouseover="mouseOver()" onmouseout="mouseOut()" > {{ Auth::user()->name}}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                @csrf
              </form>

        </div>
        @else
        <button type="button" class="btn btn-secondary" style="background-color:#E5E7E9;color:black;margin-right:10px;" name="button" onclick="document.getElementById('modal-wrapper').style.display='block'">Login</button>
        <button type="button" class="btn btn-secondary "style="background-color:#E5E7E9;color:black;" name="button"><a href="{{ route('register')}}">Register</a> </button>

        @endauth
        @endif
      </div>
    </div>
    <script type="text/javascript">
    @auth
    function mouseOver() {
      var header = document.getElementById('username');
      header.innerHTML = "Logout";
        }
    function mouseOut() {
        var header = document.getElementById('username');
        header.innerHTML = "{{Auth::user()->name}}";
          }
      @endauth
    </script>
  </body>
</html>
