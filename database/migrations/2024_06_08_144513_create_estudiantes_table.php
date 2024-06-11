<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use  Illuminate\Database\QueryException;

class CreateEstudiantesTable extends Migration

{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {

            $table->id('id_estudiante')->autoIncrement();
            $table->string('nombres', 50);
            $table->string('apellidos', 50);
            $table->string('cedula', 10);
            $table->string('telefono', 15);
            $table->string('correo', 50);
            $table->string('nombre_contacto', 50);
            $table->string('telefono_contacto', 15);
            $table->integer('id_discapacidad')->index('id_discapacidad');
            $table->integer('edad');
            $table->date('fecha_nacimiento');
            $table->text('observaciones');
            $table->text('seguimiento');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
}
