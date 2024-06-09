<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialMedicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_medico', function (Blueprint $table) {
            $table->id('id_historialmedico');
            $table->integer('id_estudiante');
            $table->string('certificado_conapdis', 2);
            $table->text('informe_medico');
            $table->text('tratamiento');
            
            $table->foreign('id_estudiante', 'historial_medico_ibfk_1')->references('id_estudiante')->on('estudiantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial_medico');
    }
}
