<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/home.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>
      @include('includes/header')
      @include('includes/login')
      <div class="inicio">
        <h1 class="main-title">AdoptMe</h1>
        <div class="buscador">
          <h3 style="width:100%;font-size:2rem;">Buscador</h3>
          <div class="" style="display:flex;flex-direction:row;">
            <input type="text" class=" input-busqueda" name="" placeholder="Buscar usuarios,perros,razas y mas">

          </div>
          <div class="" style="width:100%;align-items:center;display:flex;">
            <button type="submit" class="boton-busqueda btn btn-primary" name="button">Buscar</button>
          </div>
        </div>
      </div>
            <div class="content">

              <div class="novedades">
                <h2>Quienes somos?</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <h3>Asdasd</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              <div class="perros">
              @auth
              <form class="post-perro" action="{{ route('crear.perro') }}" method="post"  enctype="multipart/form-data">
                @csrf
                <div class="form-div">
                  <label for="name">Nombre</label>
                  <input class="input-perro" type="text" name="name" value="">
                  <label for="tamaño">Tamaño</label>
                  <input type="text" class="input-perro" name="tamaño" value="">
                  <label for="edad">Edad </label>
                  <input class="input-perro" type="number" name="edad" value="" min="1" max="20">
                  <label for="raza">Raza</label>
                  <input class="input-perro" type="text" name="raza" value="">
                </div>
                <div class="form-div">
                  <label for="img">Imagen:</label>
                  <input accept="image/*" class="input-perro"  style="width:85%;" type="file" name="img" value="">
                  <label for="contacto">Contacto</label>
                  <textarea name="contacto" rows="4" cols="40" style="width:90%;"></textarea>
                </div>
                <div class="form-div">
                  <label for="comentarios" style="height:10%;">Comentarios</label>
                  <textarea name="comentarios" style="width:90%; height:250px;"></textarea>
                </div>
                <input class="btn btn-secondary boton-busqueda" type="submit" name="" value="Publicar :)">
              </form>
              @include('includes/errores')
              @endauth
              @foreach($perros as $perro)
              <div class="perro">
                  @if(Auth::user() == $perro->user)
                <div class="">
                    <a href="{{route('borrar.perro' , $perro->id)}}" style="padding-left:10px;"><i class="far fa-trash-alt"></i></a>
                  </form>
                </div>
                @endif
                <div class="datos-perro">
                  <h2>{{$perro->name}}</h2>
                  <p>{{$perro->edad}} meses de edad</p>
                  <p>{{$perro->tamaño}}</p>
                  <p>{{$perro->raza}}</p>
                  <p>{{$perro->contacto}}</p>
                  <p>Publicado por <a href="#">{{$perro->owner}}</a> {{$perro->created_at}}</p>
                </div>
                <div class="datos-perro">
                  <h4>Comentarios</h4>
                  <p>{{$perro->comentarios}}</p>
                </div>
                <div class="datos-perro">
                  <img class="img-perro" src="imgs/{{$perro->img}}" alt="">
                </div>
              </div>
              @endforeach
            </div>
          </div>
    </body>
</html>
