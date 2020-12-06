<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->decimal('valor_compra', 6,2)->default(0);
            $table->decimal('valor_venda',6,2)->default(0);
            $table->decimal('estoque',6,2)->default(0);
            $table->string('tipo');
            $table->decimal('quantidade',6,2)->default(0);
            $table->decimal('estoque_min',6,2)->default(0);
            $table->bigInteger('categoria_id')->unsigned()->nullable();
            $table->bigInteger('fornecedor_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();

        });

        Schema::table('produtos', function(Blueprint $table){
            
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedors');   

        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
