<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanillaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planilla', function (Blueprint $table) {
            $table->increments('id_planilla');
            $table->integer('mes _correspondiente');
            $table->integer('año_correspondiente');
            $table->enum('estado',['activa', 'cerrada', 'entregada']);
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users');
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
        Schema::drop('planilla');
    }
}
