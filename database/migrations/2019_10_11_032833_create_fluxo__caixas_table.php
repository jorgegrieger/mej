<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFluxoCaixasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fluxo__caixas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('data_pagamento');
            $table->dateTime('data_vencimento');
            $table->string('descricao');
            $table->enum('situacao',['entrada','saida']);
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fluxo__caixas');
    }
}
