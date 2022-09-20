<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class GalloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 1,
                "partido" => "Verde",
                "peso" => "1.73",
                "anillo" => "10",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 1,
                "partido" => "Verde",
                "peso" => "1.77",
                "anillo" => "11",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 2,
                "partido" => "Rojo",
                "peso" => "1.74",
                "anillo" => "12",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 2,
                "partido" => "Rojo",
                "peso" => "1.79",
                "anillo" => "13",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 3,
                "partido" => "Verde",
                "peso" => "1.83",
                "anillo" => "14",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 4,
                "partido" => "Rojo",
                "peso" => "1.85",
                "anillo" => "15",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 4,
                "partido" => "Rojo",
                "peso" => "1.78",
                "anillo" => "16",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
    }
}