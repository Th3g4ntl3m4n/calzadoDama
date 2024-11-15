<?php

namespace App\Http\Controllers;


use App\Models\Venta; // Importar el modelo Venta

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 


class VentaController extends Controller
{
    public function index()
    {
      // Obtener todas las ventas
      $ventas = Venta::all(); 

      // Calcular el producto más vendido
      $productoMasVendido = Venta::select('producto', DB::raw('SUM(cantidad) as total_vendido'))
                              ->groupBy('producto')
                              ->orderByDesc('total_vendido')
                              ->first();

      // Calcular el producto menos vendido
      $productoMenosVendido = Venta::select('producto', DB::raw('SUM(cantidad) as total_vendido'))
                               ->groupBy('producto')
                               ->orderBy('total_vendido')
                               ->first();

      // Pasar los datos a la vista
      return view('ventas', compact('ventas', 'productoMasVendido', 'productoMenosVendido'));
  }    

    public function store(Request $request)
    {
        // Valida y guarda una nueva venta
        $request->validate([
            'monto' => 'required|numeric',
            'fecha' => 'required|date',
            'cantidad' => 'required|integer',
            'producto' => 'required|string',
        ]);

        Venta::create($request->all());
        return redirect()->route('ventas.index')->with('success', 'Venta registrada con éxito');
    }
}
