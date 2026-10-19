<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aliado extends Model
{
    protected $fillable = [
        'nombre',
        'documento',
        'telefono',
        'correo',
        'tipo',
        'estado',
    ];
}
