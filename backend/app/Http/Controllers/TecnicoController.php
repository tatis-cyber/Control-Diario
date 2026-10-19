<?php

namespace App\Http\Controllers;

use App\Models\Tecnico;
use Illuminate\Http\Request;

class TecnicoController extends Controller
{
    public function index()
    {
        return response()->json(Tecnico::all());
    }

    public function store(Request $request)
{
    $datos = $request->validate([
        'nombre' => 'required|string',
        'documento' => 'nullable|string',
        'telefono' => 'nullable|string',
        'correo' => 'nullable|email',
        'especialidad' => 'nullable|string',
        'estado' => 'required|string',
    ]);

    $tecnico = Tecnico::create($datos);

    return response()->json($tecnico, 201);
}

    public function show(Tecnico $tecnico)
    {
        return response()->json($tecnico);
    }

    public function update(Request $request, Tecnico $tecnico)
{
    $datos = $request->validate([
        'nombre' => 'required|string',
        'documento' => 'nullable|string',
        'telefono' => 'nullable|string',
        'correo' => 'nullable|email',
        'especialidad' => 'nullable|string',
        'estado' => 'required|string',
    ]);

    $tecnico->update($datos);

    return response()->json($tecnico);
}

    public function destroy(Tecnico $tecnico)
    {
        $tecnico->delete();

        return response()->json([
            'mensaje' => 'Técnico eliminado correctamente'
        ]);
    }
}
