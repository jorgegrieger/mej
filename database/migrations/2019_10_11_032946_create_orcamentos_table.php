<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrcamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cliente_id')->unsigned();
            $table->bigInteger('produto_id')->unsigned();
            $table->bigInteger('servico_id')->unsigned();
            $table->dateTime('data');
            $table->decimal('desconto', 6, 2)->default(0);
            $table->decimal('total',6, 2)->default(0);
            $table->timestamps();
            $table->softDeletes();


        });
        Schema::table('orcamentos', function(Blueprint $table){
            $table->foreign('servico_id')->references('id')->on('servicos');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('produto_id')->references('id')->on('produtos'); 

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orcamentos');
    }
}
