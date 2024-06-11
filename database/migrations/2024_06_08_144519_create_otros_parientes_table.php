<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtrosParientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otros_parientes', function (Blueprint $table) {
            $table->id('id_pariente')->autoIncrement();
            $table->integer('id_estudiante')->index('id_estudiante');
            $table->string('nombre_pariente', 30);
            $table->string('apellido_pariente', 30);
            $table->date('fecha_nacimiento');
            $table->string('ocupacion', 50);
            $table->string('parentesco', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('otros_parientes');
    }
}
