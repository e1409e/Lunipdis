<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportePsicologicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporte_psicologico', function (Blueprint $table) {
            $table->id('id_psicologico')->autoIncrement();
            $table->string('Nombre', 20);
            $table->string('Apellido', 20);
            $table->string('lugnac', 100);
            $table->date('fechnac');
            $table->integer('edad');
            $table->string('nv_ins', 50);
            $table->text('motivocon');
            $table->text('sintdiag');
            $table->text('recomendaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reporte_psicologico');
    }
}
