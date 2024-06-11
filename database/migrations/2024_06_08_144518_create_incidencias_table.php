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
            $table->id('id_incidencia')->autoIncrement();
            $table->integer('id_estudiante')->index('id_estudiante');
            $table->time('hora_incidente');
            $table->date('fecha_incidente');
            $table->text('donde_incidente');
            $table->text('descripcion_incidente');
            $table->text('acuerdos');
            $table->text('observaciones');
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
