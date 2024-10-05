<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class formProductoController extends Controller
{
    // Método para mostrar el formulario
    public function create()
    {
        return view('formProductos'); 
    }
}
