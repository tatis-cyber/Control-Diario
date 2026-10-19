<?php

namespace App\Http\Controllers;
use App\Models\Actividad;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    public function index()
    {
        $actividades = Actividad::all();
        return response()->json($actividades);
    }
    public function store(Request $request)
    {
        $actividad = Actividad::create($request->all());
        return response()->json($actividad, 201);
    }
    public function show($id)
    {
        $actividad = Actividad::findOrFail($id);
        return response()->json($actividad);
    }
    public function update(Request $request, $id)
    {
        $actividad = Actividad::findOrFail($id);
        $actividad->update($request->all());
        return response()->json($actividad);
    }
    public function destroy($id)
    {
        $actividad = Actividad::findOrFail($id);
        $actividad->delete();
        return response()->json(['mensaje' => 'Actividad eliminada correctamente'], 204);
    }

}
