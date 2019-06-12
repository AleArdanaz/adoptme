<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
    <body>
      @include('includes/header')
      <div class="inicio">
        <h1 class="main-title">AdoptMe</h1>
        <div class="">

        </div>
      </div>
            <div class="content">

              <div class="novedades">
                <div class="" style="margin-bottom:30px;">
                  <h2>Queres dar en adopcion?</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <a href="{{route('adopcion')}}" class="miboton">Dar en adopcion!</a>

                  <h3>Asdasd</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              </div>
              <div class="perros">
              @auth
              @endauth
              @foreach($perros as $perro)
              <div class="" style="width:500px;">


                <div class="perro">
                  <div class="parte-izq">
                    @auth
                    <form class="" action="{{route('borrar.perro' , $perro->id)}}" method="post">
                      @csrf
                      <button type="submit" style="padding-left:10px;"><i class="far fa-trash-alt"></i></button>
                    </form>
                    @endauth
                    <img src="{{ asset( 'perrosimg/' . $perro->img)}}" class="img-perro" alt="">
                  </div>
                  <div class="parte-der">
                    <h2>{{$perro->name}}</h2>
                    <div class="atributos">
                      <label for="tamaño">Tamaño:</label> <p name="tamaño"><strong>{{$perro->tamaño}}</strong></p>
                      <label for="raza">Raza:</label><p name="raza"><strong>{{$perro->raza}}</strong></p>
                      <label for="edad">Edad:</label><p name="edad"><strong>{{$perro->edad}} meses</strong></p>
                    </div>
                    <div class="ancla">
                      <a class="miboton" href="{{route('profile.perro', $perro->id)}}">Ver mas!</a>
                    </div>
                  </div>
                </div>
                </div>



                    @endforeach
                  </div>
                </div>
        <script type="text/javascript">




        function cambiarFoto() {
          var principal = document.getElementById('foto-principal').innerHTML;
          var secundaria = document.getElementById('a').innerHTML;
          console.log(secundaria);



        }

        </script>

    </body>
</html>
