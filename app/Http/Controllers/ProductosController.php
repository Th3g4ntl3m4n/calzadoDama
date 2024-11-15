<?php

namespace App\Http\Controllers;
use App\Models\Productos;
use App\Models\Venta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index() {
        
        $productos = Productos::all();

        return view('productos',compact('productos'));
    }

    public function show(Productos $producto) {     
        

        return view('details',compact('producto'));
    }

    public function comprar($id)
    {
        // Buscar el producto por su ID
        $producto = Productos::findOrFail($id);
    
        // Verificar si hay stock disponible
        if ($producto->Stock > 0) {
            // Registrar la venta en la tabla `ventas`
            Venta::create([
                'ID_Cliente' => auth()->user()->id, // Asumiendo que estás usando autenticación
                'Fecha_venta' => now(),
                'producto' => $producto->Nombre,
                'cantidad' => 1, // Cambia esto si usas un campo de cantidad
                'Monto_total' => $producto->Precio, // Aquí puedes multiplicar la cantidad si es necesario
            ]);
    
            // Reducir el stock del producto
            $producto->Stock -= 1;
            $producto->save();
    
            // Redirigir al detalle del producto usando el slug
            return redirect()->route('productos.show', ['producto' => $producto->slug])
                             ->with('success', 'Compra realizada con éxito.');
        }
    
        return redirect()->back()->with('error', 'Lo sentimos, este producto está agotado.');
    }
    


}
