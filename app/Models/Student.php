<?php

namespace Escuela\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   	protected $fillable = [
        'nombre', 
        'apellidoPaterno', 
        'apellidoMaterno',
        'direccion',
    ];
}
