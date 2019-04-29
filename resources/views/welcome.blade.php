<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/home.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>
      @include('includes/header')
      <div class="inicio">
        <h1 class="main-title">AdoptMe</h1>
        <div class="buscador">
          <h3>Buscador</h3>
          <div class="" style="display:flex;flex-direction:row;">
            <input type="text" class="form-control input-busqueda" name="" placeholder="Nombre">
            <input type="text" class="form-control input-busqueda" name="" value=""  placeholder="Raza">
            <input type="number" class="form-control input-busqueda" name="" value=""  placeholder="Edad">
            <select class="form-control input-busqueda" name="tamaño" placeholder="Tamaño">
              <option value="">Chico</option>
              <option value="">Mediano</option>
              <option value="">Grande</option>
            </select>
          </div>
          <div class="" style="width:100%;align-items:center;display:flex;justify-content:center;">
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
              <form class="post-perro" action="{{route('crear.perro')}}" method="post">
                <div class="form-div">
                  <label for="nombre">Nombre</label>
                  <input class="input-perro" type="text" name="nombre" value="">
                  <label for="">Tamaño</label>
                  <select class="input-perro" name="tamaño">
                    <option value="">Chico</option>
                    <option value="">     Mediano</option>
                    <option value="">     Grande</option>
                  </select>
                  <label for="edad">Edad </label>
                  <input class="input-perro" type="number" name="edad" value="" min="1" max="20">
                  <label for="raza">Raza</label>
                  <input class="input-perro" type="text" name="" value="">
                </div>
                <div class="form-div">
                  <label for="img">Imagen:</label>
                  <input accept="image/*" class="input-perro" type="file" name="img" value="">
                  <label for="">Contacto</label>
                  <textarea name="name" rows="4" cols="40" style="width:90%;"></textarea>
                </div>
                <div class="form-div">
                  <label for="img">Comentarios</label>
                  <textarea name="comentarios" style="width:90%; height:90px;"></textarea>
                </div>
                <input class="boton" type="submit" name="" value="Buscar hogar!">
              </form>
              @endauth
              <div class="perro">
                <div class="datos-perro">
                  <h3>Nombre Perro</h3>
                  <h4>Edad</h4>
                  <h4>Tamaño</h4>
                  <h4>Raza</h4>
                  <h4>Contacto</h4>
                </div>
                <div class="datos-perro">
                  <h4>Comentarios</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="datos-perro">
                  <img class="img-perro" src="imgs/perro-raro.jpg" alt="">
                </div>
              </div>
              <div class="perro">
                <div class="datos-perro">
                  <h3>Nombre Perro</h3>
                  <h4>Edad</h4>
                  <h4>Tamaño</h4>
                  <h4>Raza</h4>
                </div>
                <div class="datos-perro">
                  <h4>Comentarios</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="datos-perro">
                  <img class="img-perro" src="imgs/perro-raro.jpg" alt="">
                </div>
              </div>
              <div class="perro">
                <div class="datos-perro">
                  <h3>Nombre Perro</h3>
                  <h4>Edad</h4>
                  <h4>Tamaño</h4>
                  <h4>Raza</h4>
                </div>
                <div class="datos-perro">
                  <h4>Comentarios</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="datos-perro">
                  <img class="img-perro" src="imgs/perro-raro.jpg" alt="">
                </div>
              </div>
            </div>



            </div>
    </body>
</html>
