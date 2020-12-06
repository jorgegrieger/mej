<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaudosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laudos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('foto');
            $table->string('motivo');
            $table->bigInteger('motor_id')->unsigned();
            $table->bigInteger('cliente_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

        });
        Schema::table('laudos', function(Blueprint $table){
            
            $table->foreign('motor_id')->references('id')->on('motors');
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
        Schema::dropIfExists('laudos');
    }
}
