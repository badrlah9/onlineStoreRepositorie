@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')


<!-- <div class="row">
  <div class="col-md-6 col-lg-4 mb-2">
    <img src="{{ asset('/img/game.png') }}" class="img-fluid rounded">
  </div>
  <div class="col-md-6 col-lg-4 mb-2">
    <img src="{{ asset('/img/safe.png') }}" class="img-fluid rounded">
  </div>
  <div class="col-md-6 col-lg-4 mb-2">
    <img src="{{ asset('/img/submarine.png') }}" class="img-fluid rounded">
  </div> -->

<div id="carouselExample" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('/img/visonPro.jpg') }}" class="d-block w-100 img-fluid rounded" alt="Imagen 1">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('/img/iphoen15.jpg') }}" class="d-block w-100 img-fluid rounded" alt="Imagen 3">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('/img/appleWatch.jpg') }}" class="d-block w-100 img-fluid rounded" alt="Imagen 4">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('/img/ipad5.jpg') }}" class="d-block w-100 img-fluid rounded" alt="Imagen 4">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('/img/diplayXDR.jpg') }}" class="d-block w-100 img-fluid rounded" alt="Imagen 2">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
</div>

<!-- Incluir scripts de Bootstrap-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- Inicializar el carrusel -->
<script>
    $(document).ready(function(){
        $('.carousel').carousel();
    });
</script>

<script>
  // Inicializar el carrusel al cargar la página
  $(document).ready(function(){
        $('.carousel').carousel();
    });

    // Control de reproducción automática del carrusel
    $('.carousel').carousel({
        interval: 5000, // Cambia el intervalo en milisegundos según mi necesidades
        pause: 'hover' // el caroussel Pausa al pasar el ratón sobre el carrusel
    });
</script>

@endsection