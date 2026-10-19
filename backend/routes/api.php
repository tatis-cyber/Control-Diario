<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\TecnicoController;
use App\Http\Controllers\SedeController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AliadoController;
use App\Http\Controllers\ProgramacionController;

Route::apiResource('actividades', ActividadController::class);
Route::apiResource('tecnicos', TecnicoController::class);
Route::apiResource('sedes', SedeController::class);
Route::apiResource('clientes', ClienteController::class);
Route::apiResource('aliados', AliadoController::class);
Route::apiResource('programaciones', ProgramacionController::class);
