@extends('layout')

@section('content')
   
<br>

 
    <ul class="row"> <!-- Usamos la clase row para crear una fila -->
        @foreach($productos as $producto)
     <div class="col-md-4">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ asset('images/imagen.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><a href="{{ route('productos.show', $producto->slug) }}">{{$producto->Nombre}}    </a></h5>
                  <p class="card-text"> {{$producto->Descripcion}}</p>
                  <p class="card-text"><small class="text-body-secondary">${{$producto->Precio}}</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
    </ul>
@endsection


