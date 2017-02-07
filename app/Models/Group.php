<?php

namespace Escuela\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable=[
    	'nombre',
    	'course_id',
    	'schedule_id',
    	'teacher_id',
    ];
}
