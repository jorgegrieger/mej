<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecebeContasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recebe__contas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descricao');
            $table->dateTime('data_pagamento');
            $table->dateTime('data_vencimento');
            $table->enum('situacao', ['pago', 'aberto'])->default('aberto');
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
        Schema::dropIfExists('recebe__contas');
    }
}
