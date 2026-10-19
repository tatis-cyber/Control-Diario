<?php

namespace App\Http\Controllers;

use App\Models\Programacion;
use Illuminate\Http\Request;

class ProgramacionController extends Controller
{
    public function index()
    {
        return response()->json(Programacion::all());
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'fechaInicio' => 'required|string',
            'fechaFin' => 'required|string',
            'tecnico' => 'required|string',
            'cliente' => 'required|string',
            'sede' => 'required|string',
            'actividad' => 'required|string',
            'observaciones' => 'nullable|string',
            'estado' => 'required|string',
        ]);

        $programacion = Programacion::create($datos);

        return response()->json($programacion, 201);
    }

    public function show(Programacion $programacion)
    {
        return response()->json($programacion);
    }

    public function update(Request $request, Programacion $programacion)
    {
        $datos = $request->validate([
            'fechaInicio' => 'required|string',
            'fechaFin' => 'required|string',
            'tecnico' => 'required|string',
            'cliente' => 'required|string',
            'sede' => 'required|string',
            'actividad' => 'required|string',
            'observaciones' => 'nullable|string',
            'estado' => 'required|string',
        ]);

        $programacion->update($datos);

        return response()->json($programacion);
    }

    public function destroy(Programacion $programacion)
    {
        $programacion->delete();

        return response()->json([
            'mensaje' => 'Programación eliminada correctamente'
        ]);
    }
}