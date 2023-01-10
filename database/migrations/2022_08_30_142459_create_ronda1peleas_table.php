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

            $table->string('equipo1')->nullable();
            $table->bigInteger('participante_id')->unsigned()->unique()->nullable();
            $table->float('peso1')->nullable();

            $table->string('equipo2')->nullable();
            $table->bigInteger('clonparticipante_id')->unsigned()->unique()->nullable();
            $table->float('peso2')->nullable();

            $table->foreign('participante_id')->references('id')->on('participantes')->onDelete('cascade');
            $table->foreign('clonparticipante_id')->references('id')->on('clonparticipantes')->onDelete('cascade');

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
        Schema::dropIfExists('ronda1peleas');
    }
};
