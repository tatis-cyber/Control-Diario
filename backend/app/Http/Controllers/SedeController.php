<?php

namespace App\Http\Controllers;

use App\Models\Sede;
use Illuminate\Http\Request;

class SedeController extends Controller
{
    public function index()
    {
        return response()->json(Sede::all());
    }

    public function store(Request $request)
{
    $datos = $request->validate([
        'nombre' => 'required|string',
        'direccion' => 'nullable|string',
        'ciudad' => 'nullable|string',
        'telefono' => 'nullable|string',
        'estado' => 'required|string',
    ]);

    $sede = Sede::create($datos);

    return response()->json($sede, 201);
}

    public function show(Sede $sede)
    {
        return response()->json($sede);
    }

    public function update(Request $request, Sede $sede)
{
    $datos = $request->validate([
        'nombre' => 'required|string',
        'direccion' => 'nullable|string',
        'ciudad' => 'nullable|string',
        'telefono' => 'nullable|string',
        'estado' => 'required|string',
    ]);

    $sede->update($datos);

    return response()->json($sede);
}

    public function destroy(Sede $sede)
    {
        $sede->delete();

        return response()->json([
            'mensaje' => 'Sede eliminada correctamente'
        ]);
    }
}
