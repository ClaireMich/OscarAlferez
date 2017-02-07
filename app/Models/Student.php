<?php

namespace Escuela\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   	protected $fillable = [
        'nombre', 
        'apellidoPaterno', 
        'apellidoMaterno',
        'fechaNacimiento',
        'telefonoCasa',
        'telefonoMovil',
        'contactoEmergencia',
        'telefonoContactoEmergencia',
        'correo',
        'municipality_id',
        'status_id',
        'employee_id',
        'foto',
        'calle',
        'numero',
        'codigoPostal',
        'sexo',
        'enfermedad',
        'enfermedadDescripcion',
        'medicoConfianza',
        'primeraPersona',
        'segundaPersona',
    ];

    public function municapilty()
    {
        return $this->belongsTo(Municipality::class);
    }
}
