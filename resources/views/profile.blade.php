<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

</head>
  <body>
    @include('includes/header')
    <div class="inicio">
      <h1 class="main-title">{{$user->name}}</h1>
      <div class="buscador">
        <h3>Biografia</h3>
        <p id="bio">{{$user->bio}}</p>
        @if(Auth::user()->id == $user->id)
        <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Editar Biografia
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form class="" action="{{route('edit.bio')}}" method="post">
                    @csrf
                    <textarea name="bio" rows="8" cols="50"></textarea>
                    @include('includes/errores')
                    <button  class="btn btn-primary" type="submit" name="button">Editar</button>
                  </form>
                </div>

                </div>
              </div>
            </div>
          </div>
        @endif
      </div>
    </div>
    <div class="content">

  <div class="novedades">
    <p>Se unio el {{$user->created_at}}</p>
    <p>Email: {{$user->email}}</p>
  </div>
  <div class="perros">
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
      <p><strong>Edad:</strong>{{$perro->edad}} meses de edad</p>
      <p><strong>Tamaño:</strong>{{$perro->tamaño}}</p>
      <p><strong>Raza:</strong>{{$perro->raza}}</p>
      <p><strong>Contacto:</strong>{{$perro->contacto}}</p>
      <p>Publicado por <a href="#">{{$perro->owner}}</a> {{$perro->created_at}}</p>
    </div>
    <div class="datos-perro">
      <h4>Comentarios</h4>
      <p>{{$perro->comentarios}}</p>
    </div>
    <div class="datos-perro">
    
    </div>
  </div>
  @endforeach
</div>
</div>
<img class="img-perro" src="{{ asset('perrosimg/' . $perro->img) }}" alt="">
<script type="text/javascript">

</script>
  </body>
</html>
