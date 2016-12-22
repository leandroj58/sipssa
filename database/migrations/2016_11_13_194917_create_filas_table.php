<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filas', function (Blueprint $table) {
            $table->increments('id');

            $table->date('comprobante_fecha');
            $table->string('comprobante_letra');
            $table->string('comprobante_prefijo');
            $table->string('comprobante_número');
            $table->string('afiliado_convenio');
            $table->string('afiliado_número');
            $table->string('afiliado_orden');
            $table->string('matricula_prescriptor');
            $table->date('fecha_prescripcion');
            $table->string('matricula_efector');
            $table->date('fecha_practica');
            $table->integer('prestacion');
            $table->integer('cantidad');
            $table->float('importe',4,2);
            $table->integer('afiliado_dni');
            $table->integer('nomenclador');
            $table->integer('gerenciadora_numero');
            $table->string('resultado');

            $table->integer('planilla_id')->unsigned();
            $table->foreign('planilla_id')->references('id')->on('planillas');
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
        Schema::drop('filas');
    }
}
