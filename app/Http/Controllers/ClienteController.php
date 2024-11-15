<?php

namespace App\Http\Controllers;

use App\Models\clientes; 

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
        // Mostrar lista de clientes
        public function index()
        {
            $clientes = clientes::all();
            return view('clientes.index', compact('clientes'));
        }
    
        // Crear nuevo cliente
        public function store(Request $request)
        {
            $request->validate([
                'nombre' => 'required|string|max:255',
                'apellido' => 'required|string|max:255',
                'email' => 'required|email|unique:clientes,email',                
                'telefono' => 'required|string|max:15',
                'direccion' => 'required|string|max:255',
            ]);
    
            clientes::create($request->all());
    
            return redirect()->route('clientes.index')->with('success', 'Cliente creado con éxito');
        }

        // Mostrar formulario de edición
    public function edit($id)
    {
        $cliente = clientes::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    // Actualizar cliente
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email,' . $id,
            'telefono' => 'required|string|max:15',
            'direccion' => 'required|string|max:255',
        ]);

        $cliente = clientes::findOrFail($id);
        $cliente->update($request->all());

        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado con éxito');
    }

    // Eliminar cliente
    public function destroy($id)
    {
        $cliente = clientes::findOrFail($id);
        $cliente->delete();

        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado con éxito');
    }
        
}
