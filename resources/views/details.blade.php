@extends('layout')

@section('content')

<div class="card mb-3">
    <img src="{{ asset('images/imagen.png') }}" class="card-img-top img-fluid" style="max-width: 50%; max-height: 400px; height: 500px;">  
      <h5 class="card-title">{{ $producto->Nombre}}</h5>
      <p class="card-text">{{ $producto->Descripcion}}</p>
      <p class="card-text"><small class="text-body-secondary">${{ $producto->Precio}}</small></p>
      <p class="card-text"><small class="text-body-secondary">
        
        @if($producto->Stock >= 1)
        <p class="alert alert-success" role="alert"> En Stok </p>
        @else
        <p class="alert alert-danger" role="alert""> No Disponible </p>
        @endif              
    </div>
@endsection





