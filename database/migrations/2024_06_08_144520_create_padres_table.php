<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePadresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padres', function (Blueprint $table) {
            $table->id('id_padres');
            $table->string('tipo_familiar', 20);
            $table->integer('cedula_padre')->unique('cedula');
            $table->string('lugar_nacimiento', 100);
            $table->date('fecha_nacimiento');
            $table->string('direccion_habitacion', 100);
            $table->string('telefono_contacto', 15);
            $table->string('lugar_trabajo', 100);
            $table->string('estado', 50);
            $table->string('municipio', 50);
            $table->string('departamento', 50);
            $table->string('estadodo_civil', 20);
            $table->integer('id_estudiante');
            
            $table->foreign('id_estudiante', 'fk_padres_idestu')->references('id_estudiante')->on('estudiantes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('padres');
    }
}
