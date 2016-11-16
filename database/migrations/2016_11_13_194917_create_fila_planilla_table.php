<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilaPlanillaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fila_planilla', function (Blueprint $table) {
            $table->increments('id_fila');
            $table->integer('id_planilla');
            $table->integer('dia_comprobante');
            $table->integer('mes_comprobante');
            $table->integer('año_comprobante');
            $table->integer('dia_practica');
            $table->integer('mes_practica');
            $table->integer('año_practica');
            $table->float('precio_práctica');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('fila_planilla');
    }
}
