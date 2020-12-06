<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEsquemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esquemas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descricao');
            $table->string('ligacao');
            $table->string('espiras');
            $table->string('bitola');
            $table->string('qtd_fio');
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
        Schema::dropIfExists('esquemas');
    }
}
