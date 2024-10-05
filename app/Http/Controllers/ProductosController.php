<?php

namespace App\Http\Controllers;
use App\Models\Productos;

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
}
