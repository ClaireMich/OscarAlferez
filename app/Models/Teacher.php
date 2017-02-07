<?php

namespace Escuela\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable=[
    	'nombre',
    	'apellidoPaterno',
    	'apellidoMaterno',
    ];
}
