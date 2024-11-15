<!-- resources/views/dashboard/ventas/index.blade.php -->

@extends('layoutDashboard')

@section('content')
<div class="container mt-4">
    <h3>Ventas Registradas</h3>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Monto</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ventas as $venta)
           
                <tr>
                    <td>{{ $venta->id }}</td>
                    <td>{{ $venta->producto }}</td>
                    <td>{{ $venta->cantidad }}</td>
                    <td class="text-success">${{ number_format($venta->Monto_Total, 2) }}</td>
                    <td>{{ $venta->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Estadísticas de ventas -->
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h5 class="card-title">Ventas Totales</h5>
                    <p class="card-text">${{ number_format($ventas->sum('Monto_Total'), 2) }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h5 class="card-title">Total Productos Vendidos</h5>
                    <p class="card-text">{{ $ventas->sum('cantidad') }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <h5 class="card-title">Promedio de Venta</h5>
                    <p class="card-text">${{ number_format($ventas->avg('monto_Total'), 2) }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
