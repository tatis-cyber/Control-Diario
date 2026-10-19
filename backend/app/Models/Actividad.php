<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table = 'actividades';

    protected $fillable = [
        'actividad',
	'tecnico',
        'sede',
        'cliente',
        'aliado',
        'fecha',
        'hora',
        'estado',
        'observaciones',
    ];
}
