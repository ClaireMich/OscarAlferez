<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn('CURP');
            $table->dropColumn('direccion');
            //Datos del alumno personales 
            $table->string('calle');
            $table->string('numero');
            $table->integer('codigoPostal');
            $table->smallInteger('sexo');
            //Datos del alumno por si es menor de edad
            $table->boolean('enfermedad')->nullable();
            $table->string('enfermedadDescripcion')->nullable();
            $table->string('medicoConfianza')->nullable();
            $table->string('primeraPersona')->nullable();
            $table->string('segundaPersona')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            //
        });
    }
}
