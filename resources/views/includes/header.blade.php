<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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
            <a class="dropdown-item" href="{{route('profile.user', Auth::user()->id )}}">My Profile</a>
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
        <div id="modal-wrapper" class="modal">

          <form class="modal-content animate" method="POST" action="{{route('login')}}" style="width:30%;">
            @csrf
            <div class="imgcontainer">
              <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
              <img src="imgs/21645.png" alt="Avatar" class="avatar">
              <h1 style="text-align:center;color:black;">Iniciar sesion</h1>
            </div>

            <div class="container">
              <input id="email-login" class="form-control input-login @error('email') is-invalid @enderror" type="text" placeholder="Email" name="email" value="{{ old('email') }}" required>
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
              <input id="password-login" type="password" class="form-control input-login @error('password') is-invalid @enderror" placeholder="Enter Password" name="password">
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
              <div class="" style="width:100%;margin-top:20px;align-items:center;text-align:center;">
              @if ($errors->has('email') or $errors->has('password'))
              <script type="text/javascript">
                  var modal = document.getElementById('modal-wrapper');
                  modal.style.display='block';
                  modal.style.animation='none';
              </script>
              @endif
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
              <div class="parte-inferior">
                <a href="#" style="">Forgot Password ?</a>
              </div>
            </div>

          </form>
      </div>
      <script>
      // If user clicks anywhere outside of the modal, Modal will close

      var modal = document.getElementById('modal-wrapper');
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
      </script>
      </div>
    </div>
  </body>
</html>
