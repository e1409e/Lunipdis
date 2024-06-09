<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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

            $table->engine = 'InnoDB';
            $table->increments('id')->id('id_estudiante');
            $table->string('nombres', 50)->nullable();
            $table->string('apellidos', 50)->nullable();
            $table->string('cedula', 10)->nullable();
            $table->string('telefono', 15)->nullable();
            $table->string('correo', 50)->nullable();
            $table->string('nombre_contacto', 50);
            $table->string('telefono_contacto', 15)->nullable();
            $table->integer('discapacidad_id');
            $table->integer('edad')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->text('observaciones')->nullable();
            $table->text('seguimiento')->nullable();
       
            
            $table->foreign('discapacidad_id', 'estudiantes_ibfk_3')->references('id_discapacidad')->on('discapacidad');
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
