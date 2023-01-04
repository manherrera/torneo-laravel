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
        Schema::create('puntajes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            //Datos Generales
            $table->bigIncrements('id');
            $table->bigInteger('equipo_id')->unsigned();
            
            //Datos para Gallo 1
            $table->integer('puntos1')->nullable();
            //Datos para Gallo 2
            $table->integer('puntos2')->nullable();
            //Datos para Gallo 3
            $table->integer('puntos3')->nullable();
            //Datos para Gallo 4
            $table->integer('puntos4')->nullable();
            //Datos para Gallo 5
            $table->integer('puntos5')->nullable();
            //
            $table->foreign('equipo_id')->references('id')->on('participantes')->onDelete('cascade');
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
        Schema::dropIfExists('participantes');
    }
};
