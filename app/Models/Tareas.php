<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tareas extends Model
{
    use HasFactory;
    protected $fillable = [ /**Permite insertar en la columna 'tarea' */
      'nombre'
    ];
}
