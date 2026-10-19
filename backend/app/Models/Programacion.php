<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programacion extends Model
{
    protected $fillable = [
        'fechaInicio',
        'fechaFin',
        'tecnico',
        'cliente',
        'sede',
        'actividad',
        'observaciones',
        'estado',
    ];
}
