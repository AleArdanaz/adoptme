@auth
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @include('includes/header')
    <div class="perros">
    @auth

    @endauth
    @foreach($perros as $perro)
    <div class="perro">
        @auth
      <div class="">
        <form class="" action="{{route('borrar.perro' , $perro->id)}}" method="post">
          @csrf
          <button type="submit" style="padding-left:10px;"><i class="far fa-trash-alt"></i></button>
        </form>
          <form class="" action="{{route('publicar', $perro->id)}}" method="post">
            @csrf
            <button type="submit" name="button"><i class="fas fa-check"></i></button>
          </form>
        </form>
      </div>
      @endauth
      <div class="">

        <h2>{{$perro->name}}</h2>
        <p><strong>Edad:</strong>{{$perro->edad}} meses de edad</p>
        <p><strong>Tamaño:</strong>{{$perro->tamaño}}</p>
        <p><strong>Raza:</strong>{{$perro->raza}}</p>
        <p><strong>Contacto:</strong>{{$perro->contacto}}</p>
        <p>Publicado por <a href="#">{{$perro->owner}}</a> {{$perro->created_at}}</p>
      </div>

        <h4>Comentarios</h4>
        <p>{{$perro->comentarios}}</p>
      <div class="datos-perro">
        @if (is_array(json_decode($perro->img,true)) || is_object(json_decode($perro->img,true)))
                  @foreach (json_decode($perro->img,true) as $img)
                        <img src="{{asset('perrosimg/' . $img )}}" alt="">
                  @endforeach
        @endif
          </div>
        </div>
      </div>
    </div>
  @endforeach
  </div>
  </body>
</html>
@endauth
