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
        Schema::create('ronda5peleas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('equipo1')->nullable();
            $table->integer('peleador1')->unique()->nullable();
            $table->float('peso1')->nullable();
            $table->string('equipo2')->nullable();
            $table->integer('peleador2')->unique()->nullable();
            $table->float('peso2')->nullable();
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
        Schema::dropIfExists('ronda5peleas');
    }
};
