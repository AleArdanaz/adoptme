<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
  @include('includes/header')
  <div class="inicio">
    <h1 class="main-title">  {{$perro->name}}</h1>
    <div class="nombre-c">
        <div class="">
          <p class="p-inicio">Tamaño:<strong> {{$perro->tamaño}}</strong></p>
        </div>
        <div class="">
          <p class="p-inicio">Sexo:<strong> {{$perro->sexo}}</strong></p>
        </div>
        <div class="">
          <p class="p-inicio">Edad:<strong> {{$perro->edad}} meses</strong></p>
        </div>
        <div class="">
          <p class="p-inicio">Raza:<strong> {{$perro->raza}} </strong></p>
        </div>
    </div>
  </div>
<div class="all">
  <div class="izq">
    <div class="imagenes-perro">
      <div id="carouselExampleControls" class="carousel slide caru" data-ride="carousel" style="background-color:black;">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset( 'perrosimg/' . $perro->img)}}" class="img-c" alt="">
          </div>
          @foreach ($imgs as $img)
          <div class="carousel-item">
            <img src="{{ asset( 'perrosimg/' . $img->ruta)}}" class="img-c" alt="">
          </div>
          @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="jeje">
      <div class="comentarios">
        <h2>Comentarios:</h2>
        <h4>{{$perro->comentarios}}</h4>
      </div>

      <div class="contacto">
        <h2>Contacto:</h2>
        <h4>{{$perro->contacto}}</h4>
      </div>
    </div>
  </div>














  <div class="der">
    <h3>Otros perros del mismo tamaño!</h3>
    @foreach($perrosT as $perro)
    <div class="perrosT">
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
    @endforeach
  </div>
</div>
</body>
