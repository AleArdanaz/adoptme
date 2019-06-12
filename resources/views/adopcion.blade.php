@include('includes/header')
<head>
</head>
<body>
  <main>
    <form class="enviarperro" action="{{ route('crear.perro') }}" method="post"  enctype="multipart/form-data">
      @csrf
      <h2>Dar en adopcion!</h2>
      <div class="">
        <div class="form-div">
          @include('includes\errores')
          <label for="name">Nombre</label>
          <input id="input-name" class="input-perro form-control" type="text" name="name" value="">
          <label for="">Sexo</label>
          <div class="radio">
            <div class="">
              Macho<input type="radio" name="sexo" value="Macho">
            </div>
            <div class="">
              Hembra<input type="radio" name="sexo" value="Hembra">
            </div>
          </div>
          <label for="tamaño">Tamaño</label>
        <select class="form-control" name="tamaño" style="background-color:#FDFCFC;">
          <option>Chico</option>
          <option>Mediano</option>
          <option>Grande</option>
          <option>Incierto</option>
        </select>
        <label for="edad">Edad </label>
        <input class="input-perro form-control" type="number" name="edad" value="" min="1" max="300">
        <label for="raza">Raza</label>
        <input class="input-perro form-control" type="text" name="raza" value="">
      </div>
      <div class="form-div">
        <label for="img">Imagen:</label>
        <input accept="image/*" class="coments form-control" multiple type="file" name="img[]" value="">
        <label for="contacto">Contacto</label>
        <textarea name="contacto" class="form-control" rows="4" cols="40" style="background-color:#FDFCFC;"></textarea>
      </div>
      <div class="form-div">
        <label for="comentarios">Comentarios</label>
        <textarea name="comentarios" class="form-control coments" style="background-color:#FDFCFC;"></textarea>
      </div>
      <button type="submit" class="btn btn-primary asd" name="button">Enviar!</button>
    </div>
  </form>

</div>
</div>

</main>
</body>
