<?php

namespace App\Http\Controllers;

use App\Models\Aliado;
use Illuminate\Http\Request;

class AliadoController extends Controller
{
    public function index()
    {
        return response()->json(Aliado::all());
    }

    public function store(Request $request)
{
    $datos = $request->validate([
        'nombre' => 'required|string',
        'documento' => 'nullable|string',
        'telefono' => 'nullable|string',
        'correo' => 'nullable|email',
        'tipo' => 'nullable|string',
        'estado' => 'required|string',
    ]);

    $aliado = Aliado::create($datos);

    return response()->json($aliado, 201);
}

    public function show(Aliado $aliado)
    {
        return response()->json($aliado);
    }

    public function update(Request $request, Aliado $aliado)
{
    $datos = $request->validate([
        'nombre' => 'required|string',
        'documento' => 'nullable|string',
        'telefono' => 'nullable|string',
        'correo' => 'nullable|email',
        'tipo' => 'nullable|string',
        'estado' => 'required|string',
    ]);

    $aliado->update($datos);

    return response()->json($aliado);
}

    public function destroy(Aliado $aliado)
    {
        $aliado->delete();

        return response()->json([
            'mensaje' => 'Aliado eliminado correctamente'
        ]);
    }
}
