<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ronda1peleas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('peleador1')->unsigned();
            $table->bigInteger('peleador2')->unsigned();
            $table->timestamps();
            $table->foreign('peleador1')->references('id')->on('gallos')->onDelete('cascade');
            $table->foreign('peleador2')->references('id')->on('gallos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ronda1peleas');
    }
};
