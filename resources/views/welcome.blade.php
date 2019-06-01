<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
</head>
    <body>
      @include('includes/header')
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
                <div class="" style="margin-bottom:30px;">
                  <h2>Quienes somos?</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <button type="button" name="button" class="btn btn-primary" onclick="document.getElementById('modal-wrapper').style.display='block'">Dar en adopcion!</button>
                  <div id="modal-wrapper" class="modal">

                    <form class="enviarperro modal-contentt animate" action="{{ route('crear.perro') }}" method="post"  enctype="multipart/form-data">
                      <button onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</button>
                      <h2>Dar en adopcion</h2>
                      <div class="">
                        <div class="form-div">
                          <label for="name">Nombre</label>
                          <input class="input-perro" type="text" name="name" value="">
                          <label for="tamaño">Tamaño</label>
                          <input type="text" class="input-perro" name="tamaño" value="">
                          <label for="edad">Edad </label>
                          <input class="input-perro" type="number" name="edad" value="" min="1" max="300">
                          <label for="raza">Raza</label>
                          <input class="input-perro" type="text" name="raza" value="">
                        </div>
                        <div class="form-div">
                          <label for="img">Imagen:</label>
                          <input accept="image/*" class="input-perro" multiple style="width:85%;" type="file" name="img[]" value="">
                          <label for="contacto">Contacto</label>
                          <textarea name="contacto" rows="4" cols="40" style="width:90%;"></textarea>
                        </div>
                        <div class="form-div">
                          <label for="comentarios" style="height:10%;">Comentarios</label>
                          <textarea name="comentarios" style="width:90%; height:150px;"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="button">Enviar!</button>
                        @include('includes/errores')
                      </div>
                      @csrf
                    </form>

                  </div>
                  @if ($errors->any())
                  <script type="text/javascript">
                    var modal = document.getElementById('modal-wrapper');
                    modal.style.display='block';
                  </script>
                  @endif
                </div>

                  <h3>Asdasd</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              <div class="perros">
              @auth
              @endauth
              @foreach($perros as $perro)
              <div class="perro">
                <h2>{{$perro->name}}</h2>
                <div class="arriba-perro">
                  @auth
                  <div class="">
                    <form class="" action="{{route('borrar.perro' , $perro->id)}}" method="post">
                      @csrf
                      <button type="submit" style="padding-left:10px;"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </div>
                  @endauth
                  <div class="datos-perro">
                    <p><strong>Edad:</strong>{{$perro->edad}} meses de edad</p>
                    <p><strong>Tamaño:</strong>{{$perro->tamaño}}</p>
                    <p><strong>Raza:</strong>{{$perro->raza}}</p>
                    <p><strong>Contacto:</strong>{{$perro->contacto}}</p>
                  </div>
                  <div class="datos-perro">
                    <p style="font-size:20px;font-weight:bold;">Comentarios</p>
                    <p>{{$perro->comentarios}}</p>
                    <p>Publicado el {{$perro->created_at}}</p>
                  </div>
                </div>
                <div class="imagenes-perro">
                  @if (is_array(json_decode($perro->img,true)) || is_object(json_decode($perro->img,true)))

                    @foreach (json_decode($perro->img,true) as $img)
                    <div class="" style="width:20%;">
                      <img src="{{asset('perrosimg/'. $img )}}">
                    </div>
                    @endforeach


                    @endif
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        <script type="text/javascript">
        // If user clicks anywhere outside of the modal, Modal will close

        var modal = document.getElementById('modal-wrapper');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>
        <script type="text/javascript">
          $('.carousel').carousel()

        </script>
    </body>
</html>
