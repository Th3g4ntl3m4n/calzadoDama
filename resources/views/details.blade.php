@extends('layout')

@section('content')

<div class="card mb-3">
    <img src="{{ asset('images/imagen.png') }}" class="card-img-top img-fluid" style="max-width: 50%; max-height: 400px; height: 500px;">  
    <h5 class="card-title">{{ $producto->Nombre }}</h5>
    <p class="card-text">{{ $producto->Descripcion }}</p>
    <p class="card-text"><small class="text-body-secondary">${{ $producto->Precio }}</small></p>
    <p class="card-text"><small class="text-body-secondary">

        <!-- Mostrar mensaje de éxito o error -->
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif

        @if($producto->Stock >= 1)
            <p class="alert alert-success" role="alert"> En Stock </p>
        @else
            <p class="alert alert-danger" role="alert"> No Disponible </p>
        @endif      

        <!-- Formulario de compra con selección de cantidad -->
        @if($producto->Stock >= 1)
            <form action="{{ route('comprarProducto', ['id' => $producto->id]) }}" method="POST">
                @csrf
                <!-- Campo para seleccionar la cantidad -->
                <div class="form-group">
                    <label for="cantidad">Cantidad:</label>
                    <input type="number" name="cantidad" id="cantidad" class="form-control" value="1" min="1" max="{{ $producto->Stock }}">
                </div>

                <button type="submit" class="btn btn-primary mt-3">Comprar</button>
            </form>
        @endif

    </p>
</div>

@endsection





