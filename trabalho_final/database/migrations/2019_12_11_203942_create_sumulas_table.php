<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSumulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sumulas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('placar');
            $table->string('melhor');
            $table->unsignedInteger('faltas');
            $table->unsignedInteger('impedimentos');
            $table->unsignedInteger('idevento');

            $table->foreign('idevento')->references('id')->on('eventos');
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
        Schema::dropIfExists('sumulas');
    }
}
