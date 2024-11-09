@extends('layout')

@section('content')
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        /* Ajuste de las imágenes del carrusel */
        .carousel-item img {
            width: 100%;  /* La imagen ocupará el 100% del ancho del contenedor */
            height: auto; /* Mantiene la proporción de la imagen */
            max-height: 400px; /* Limita la altura máxima de la imagen */
            object-fit: cover; /* Ajusta la imagen para cubrir el espacio sin distorsionarse */
        }
    </style>

    <main>
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://media.istockphoto.com/id/1339440288/es/foto/zapatos-de-zapatillas-blancas-y-piernas-de-ni%C3%B1a-sobre-fondo-nude-calzado-casual.jpg?s=2048x2048&w=is&k=20&c=u1OIDTpfmrSZgdEjKbSU9GiF0au5y8OfG6yl6dy6bqw=" class="d-block w-100" alt="Imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="https://media.istockphoto.com/id/1348707285/es/foto/mujer-elegante-atando-cordones-de-botines-negros.jpg?s=2048x2048&w=is&k=20&c=l05Jt0R7npEhyx7RSkAahDFaP22-9qYMumW7uMhFK5w=" class="d-block w-100" alt="Imagen 2">
                </div>
                <div class="carousel-item">
                    <img src="https://media.istockphoto.com/id/1226208399/es/foto/ni%C3%B1a-sonriente-sosteniendo-zapatos-nuevos-y-sinti%C3%A9ndose-feliz.jpg?s=2048x2048&w=is&k=20&c=SFEEp3AwIxcL-2gRn4STBXgHlWIYLGWnXTinDZWhTpc=" class="d-block w-100" alt="Imagen 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </main>

    
    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-body-secondary">It’ll blow your mind.</span></h2>
        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>
      <div class="col-md-5">
        <img src="https://media.istockphoto.com/id/1464043502/es/foto/mujer-feliz-que-busca-zapatillas-nuevas-mientras-compra-en-el-centro-comercial.jpg?s=2048x2048&w=is&k=20&c=mmCH7jPa1a76dt9BO7YRaMEdJJvkU0QEwVyHdiPVTvY=" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" alt="Placeholder: 500x500" style="object-fit: cover;">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-body-secondary">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="https://media.istockphoto.com/id/1223521713/es/foto/joven-mujer-acostada-en-nuevazapatillas-beige-hijo-acogedor-c%C3%B3modo-sal%C3%B3n-sof%C3%A1-poniendo-los.jpg?s=2048x2048&w=is&k=20&c=bpOJYleKyoS9nOV_7Hazi8zCowA2nBSy0J3VbgXlZIk=" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" alt="Placeholder: 500x500" style="object-fit: cover;">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span class="text-body-secondary">Checkmate.</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-5">
        <img src="https://media.istockphoto.com/id/1346094881/es/foto/foto-recortada-de-una-mujer-irreconocible-at%C3%A1ndose-los-cordones-de-los-zapatos-mientras-hac%C3%ADa.jpg?s=2048x2048&w=is&k=20&c=Dst9l8p9pTlbADTTZreb-2lE9gTUXto2pbRfstqlyu0=" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" alt="Placeholder: 500x500" style="object-fit: cover;">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjge9c/4Cw4J7zO1g50szG+WIT/l+5lhrfxPsn3jUc5I5W1yUm0wQf" crossorigin="anonymous"></script>
@endsection


