<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    public function index()
    {
        return response()->json(Actividad::all());
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'actividad' => 'nullable|string',
	    'tecnico' => 'required|string',
            'sede' => 'required|string',
            'cliente' => 'required|string',
            'aliado' => 'nullable|string',
            'fecha' => 'required|date',
            'hora' => 'required',
            'estado' => 'required|string',
            'observaciones' => 'nullable|string',
        ]);

        $actividad = Actividad::create($datos);

        return response()->json($actividad, 201);
    }

    public function show(Actividad $actividad)
    {
        return response()->json($actividad);
    }

    public function update(Request $request, Actividad $actividad)
    {
        $datos = $request->validate([
	    'actividad' => 'nullable|string',
            'tecnico' => 'required|string',
            'sede' => 'required|string',
            'cliente' => 'required|string',
            'aliado' => 'nullable|string',
            'fecha' => 'required|date',
            'hora' => 'required',
            'estado' => 'required|string',
            'observaciones' => 'nullable|string',
        ]);

        $actividad->update($datos);

        return response()->json($actividad);
    }

    public function destroy(Actividad $actividad)
    {
        $actividad->delete();

        return response()->json([
            'mensaje' => 'Actividad eliminada correctamente'
        ]);
    }
}
