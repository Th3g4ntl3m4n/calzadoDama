<?php

namespace App\Http\Controllers;


use App\Models\Venta; // Importar el modelo Venta

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class VentaController extends Controller
{
    public function index()
    {
        
        // Obtén las ventas y pasa a la vista
        $ventas = Venta::all();       
        return view('ventas', compact('ventas'));
        
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
        return redirect()->route('ventas.index');
    }
}
