<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
  @include('includes/header')
<div class="all">

  <div class="izq">


    <div class="">
      <img src="perrosimg/{{ asset('perrosimg/pelo.jpg') }}}" alt="">
      {{$perro->name}}
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
          <a class="btn btn-primary" href="{{route('profile.perro', $perro->id)}}">Ver mas!</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
</body>
