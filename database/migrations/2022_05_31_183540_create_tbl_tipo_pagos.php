<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTipoPagos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tipo_pagos', function (Blueprint $table) {
            $table->bigIncrements('COD_TIPO_PAGO');
            $table->enum("TIPO_CREDITO",["T","CK","E"]);
            $table->string('DESCRIPCION');
            $table->timestamps();
            $table->softDeletes(); //ESTE LO AGREGUE PARA QUE SE MIRE LA FECHA DE ELIMINACION
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_tipo_pagos');
    }
}
