<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidencias', function (Blueprint $table) {
            $table->id('id_incidencia');
            $table->integer('id_estudiante');
            $table->time('hora_incidente');
            $table->date('fecha_incidente');
            $table->text('donde_incidente');
            $table->text('descripcion_incidente');
            $table->text('acuerdos');
            $table->text('observaciones');
            
            $table->foreign('id_estudiante', 'incidencias_ibfk_1')->references('id_estudiante')->on('estudiantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incidencias');
    }
}
