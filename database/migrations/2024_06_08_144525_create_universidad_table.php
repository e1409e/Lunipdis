<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universidad', function (Blueprint $table) {
            $table->id('id_estudiante');
            $table->integer('carrera_id');
            $table->integer('facultad_id');
            $table->integer('periodo_id');
            
            $table->foreign('id_estudiante', 'fk_idestudiante_uni')->references('id_estudiante')->on('estudiantes')->onDelete('cascade');
            $table->foreign('periodo_id', 'fk_idperiodo_peri')->references('id_periodo')->on('periodo')->onDelete('cascade');
            $table->foreign('carrera_id', 'universidad_ibfk_1')->references('id_carrera')->on('carrera');
            $table->foreign('facultad_id', 'universidad_ibfk_2')->references('id_facultad')->on('facultad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('universidad');
    }
}
