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
    <style>
    *{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

    /* Full-width input fields */
    =

    /* Set a style for all buttons */
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 26px;
        border: none;
        cursor: pointer;
        width: 90%;
    	font-size:20px;
    }
    button:hover {
        opacity: 0.8;
    }

    /* Center the image and position the close button */
    .parte-inferior{
      width: 100%;
      display: flex;
      flex-direction: row;
      justify-content: space-around;
      align-items: center;
      margin-top: 20px;
    }
    .input-login {
      width: 100%;
      margin-top: 20px;
    }

    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
    }
    .avatar {
        width: 200px;
    	height:200px;
        border-radius: 50%;
    }

    /* The Modal (background) */
    .modal {
    	display:none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.4);
    }

    /* Modal Content Box */
    .modal-content {
        background-color: #fefefe;
        margin: 4% auto 15% auto;
        border: 1px solid #888;
        width: 30%;
    	padding-bottom: 30px;
    }

    /* The Close Button (x) */
    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
    }
    .close:hover,.close:focus {
        color: red;
        cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
        animation: zoom 0.6s;
    }
    @keyframes zoom {
        from {transform: scale(0)}
        to {transform: scale(1)}
    }

    </style>
  </head>
  <body>

      <div id="modal-wrapper" class="modal">

        <form class="modal-content animate" method="POST" action="{{route('login')}}">
          @csrf
          <div class="imgcontainer">
            <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
            <img src="imgs/21645.png" alt="Avatar" class="avatar">
            <h1 style="text-align:center">Iniciar sesion</h1>
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
            @if ($errors->any())
            <script type="text/javascript">
                var modal = document.getElementById('modal-wrapper');
                modal.style.display='block';
                modal.style.animation='none';
            </script>
            @endif
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <div class="parte-inferior">
              <input type="checkbox"> Remember me
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
  </body>
</html>
