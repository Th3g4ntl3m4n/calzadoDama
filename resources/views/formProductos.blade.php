@extends('layoutDashboard')

 <!-- Contenido Principal -->

    @section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <form class="bg-light p-4 rounded shadow" style="width: 400px;">
            <div class="mb-3">
                <label for="nombreProducto" class="form-label">Nombre del producto</label>
                <input type="text" class="form-control" id="nombreProducto" placeholder="Nombre del producto" required>
            </div>

            <div class="mb-3">
                <label for="descripcionProducto" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcionProducto" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="precioProducto" class="form-label">Precio</label>
                <input type="number" class="form-control" id="precioProducto" placeholder="Precio" required>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    @endsection
</div>
</div>
</div>