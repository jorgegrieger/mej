<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cliente_id')->unsigned();
            $table->dateTime('data');
            $table->decimal('desconto', 6, 2)->default(0);
            $table->decimal('total',6, 2)->default(0);
            $table->timestamps();
            $table->softDeletes();

            
        });
        Schema::table('pedidos', function(Blueprint $table){
            $table->foreign('cliente_id')->references('id')->on('clientes');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
