<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style media="screen">
    body{
      padding: 200px;
      text-align: center;
    }
      .login {
        margin-right:auto;
        text-align: center;
        justify-content: center;
        align-items: center;

      }
      .login input{
        width: 40%;
        margin: 0 auto;
      }
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Admin</h2>
  <div class="login">
    <form class="" action="{{route('login')}}" method="post" >
      @csrf
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
  </form>
  </div>
  </body>
</html>
