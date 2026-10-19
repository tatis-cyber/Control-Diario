<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return response()->json(Cliente::all());
    }

    public function store(Request $request)
{
    $datos = $request->validate([
        'nombre' => 'required|string',
        'documento' => 'nullable|string',
        'telefono' => 'nullable|string',
        'correo' => 'nullable|email',
        'direccion' => 'nullable|string',
        'estado' => 'required|string',
    ]);

    $cliente = Cliente::create($datos);

    return response()->json($cliente, 201);
}

    public function show(Cliente $cliente)
    {
        return response()->json($cliente);
    }

    public function update(Request $request, Cliente $cliente)
{
    $datos = $request->validate([
        'nombre' => 'required|string',
        'documento' => 'nullable|string',
        'telefono' => 'nullable|string',
        'correo' => 'nullable|email',
        'direccion' => 'nullable|string',
        'estado' => 'required|string',
    ]);

    $cliente->update($datos);

    return response()->json($cliente);
}

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return response()->json([
            'mensaje' => 'Cliente eliminado correctamente'
        ]);
    }
}
