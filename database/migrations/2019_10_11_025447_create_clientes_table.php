<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('razao_social')->nullable();;
            $table->string('data_nascimento')->nullable();
            $table->string('inscricao_municipal')->nullable();
            $table->string('inscricao_estadual')->nullable();
            $table->string('telefone')->nullable();
            $table->string('email')->nullable();
            $table->string('celular')->nullable();
            $table->string('cnpj')->nullable();;
            $table->string('cpf')->nullable();;
            $table->string('rg')->nullable();;
            $table->string('rua')->nullable();;
            $table->string('bairro')->nullable();;
            $table->string('numero')->nullable();;
            $table->bigInteger('cidade_id')->unsigned();
            $table->bigInteger('estado_id')->unsigned();
            $table->bigInteger('pais_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

        });
        Schema::table('clientes', function (Blueprint $table){

            $table->foreign('cidade_id')->references('id')->on('cidades');
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->foreign('pais_id')->references('id')->on('pais');
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
