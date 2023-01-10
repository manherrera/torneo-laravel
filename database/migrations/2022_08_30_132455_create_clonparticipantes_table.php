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
        Schema::create('clonparticipantes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            //Datos Generales
            $table->bigIncrements('id');
            $table->string('equipo');
            
            //Datos para Gallo 1
            $table->integer('gallo1_anillo')->unsigned();
            $table->float('peso1');
            $table->integer('puntos1');
            //Datos para Gallo 2
            $table->integer('gallo2_anillo')->unsigned();
            $table->float('peso2');
            $table->integer('puntos2');
            //Datos para Gallo 3
            $table->integer('gallo3_anillo')->unsigned();
            $table->float('peso3');
            $table->integer('puntos3');
            //Datos para Gallo 4
            $table->integer('gallo4_anillo')->unsigned();
            $table->float('peso4');
            $table->integer('puntos4');
            //Datos para Gallo 5
            $table->integer('gallo5_anillo')->nullable();
            $table->float('peso5')->nullable();
            $table->integer('puntos5');

            //
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
        Schema::dropIfExists('clonparticipantes');
    }
};
