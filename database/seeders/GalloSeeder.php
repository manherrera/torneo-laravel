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
                "anillo" => "11",
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
                "peso" => "1.73",
                "anillo" => "12",
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
                "peso" => "1.75",
                "anillo" => "13",
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
                "anillo" => "14",
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
                "anillo" => "15",
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
                "peso" => "1.80",
                "anillo" => "16",
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
                "anillo" => "17",
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
                "peso" => "1.76",
                "anillo" => "18",
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
                "anillo" => "19",
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
                "peso" => "1.82",
                "anillo" => "20",
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
                "peso" => "1.84",
                "anillo" => "21",
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
                "peso" => "1.75",
                "anillo" => "22",
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
                "anillo" => "23",
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
                "anillo" => "24",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 4,
                "partido" => "Verde",
                "peso" => "1.83",
                "anillo" => "25",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 4,
                "partido" => "Verde",
                "peso" => "1.82",
                "anillo" => "26",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 5,
                "partido" => "Verde",
                "peso" => "1.82",
                "anillo" => "27",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 5,
                "partido" => "Verde",
                "peso" => "1.82",
                "anillo" => "28",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 5,
                "partido" => "Verde",
                "peso" => "1.78",
                "anillo" => "29",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 5,
                "partido" => "Verde",
                "peso" => "1.77",
                "anillo" => "30",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 6,
                "partido" => "Rojo",
                "peso" => "1.74",
                "anillo" => "31",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 6,
                "partido" => "Rojo",
                "peso" => "1.80",
                "anillo" => "32",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 6,
                "partido" => "Rojo",
                "peso" => "1.79",
                "anillo" => "33",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 6,
                "partido" => "Rojo",
                "peso" => "1.76",
                "anillo" => "34",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 7,
                "partido" => "Verde",
                "peso" => "1.83",
                "anillo" => "35",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 7,
                "partido" => "Verde",
                "peso" => "1.82",
                "anillo" => "36",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 7,
                "partido" => "Verde",
                "peso" => "1.84",
                "anillo" => "37",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 7,
                "partido" => "Verde",
                "peso" => "1.75",
                "anillo" => "38",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 8,
                "partido" => "Rojo",
                "peso" => "1.74",
                "anillo" => "39",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 8,
                "partido" => "Rojo",
                "peso" => "1.80",
                "anillo" => "40",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 8,
                "partido" => "Rojo",
                "peso" => "1.79",
                "anillo" => "41",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 8,
                "partido" => "Rojo",
                "peso" => "1.76",
                "anillo" => "42",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 9,
                "partido" => "Verde",
                "peso" => "1.83",
                "anillo" => "43",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 9,
                "partido" => "Verde",
                "peso" => "1.82",
                "anillo" => "44",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 9,
                "partido" => "Verde",
                "peso" => "1.84",
                "anillo" => "45",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 9,
                "partido" => "Verde",
                "peso" => "1.75",
                "anillo" => "46",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 10,
                "partido" => "Rojo",
                "peso" => "1.74",
                "anillo" => "47",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 10,
                "partido" => "Rojo",
                "peso" => "1.80",
                "anillo" => "48",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 10,
                "partido" => "Rojo",
                "peso" => "1.79",
                "anillo" => "49",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 10,
                "partido" => "Rojo",
                "peso" => "1.76",
                "anillo" => "50",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 11,
                "partido" => "Rojo",
                "peso" => "1.74",
                "anillo" => "51",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 11,
                "partido" => "Rojo",
                "peso" => "1.80",
                "anillo" => "52",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 11,
                "partido" => "Rojo",
                "peso" => "1.79",
                "anillo" => "53",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 11,
                "partido" => "Rojo",
                "peso" => "1.79",
                "anillo" => "331",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 12,
                "partido" => "Rojo",
                "peso" => "1.80",
                "anillo" => "132",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 12,
                "partido" => "Rojo",
                "peso" => "1.79",
                "anillo" => "133",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 12,
                "partido" => "Rojo",
                "peso" => "1.79",
                "anillo" => "134",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 12,
                "partido" => "Rojo",
                "peso" => "1.76",
                "anillo" => "54",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 13,
                "partido" => "Verde",
                "peso" => "1.83",
                "anillo" => "55",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 13,
                "partido" => "Verde",
                "peso" => "1.82",
                "anillo" => "56",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 13,
                "partido" => "Verde",
                "peso" => "1.84",
                "anillo" => "57",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 13,
                "partido" => "Verde",
                "peso" => "1.75",
                "anillo" => "58",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 14,
                "partido" => "Rojo",
                "peso" => "1.74",
                "anillo" => "59",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 14,
                "partido" => "Rojo",
                "peso" => "1.80",
                "anillo" => "60",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 14,
                "partido" => "Rojo",
                "peso" => "1.79",
                "anillo" => "61",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 14,
                "partido" => "Rojo",
                "peso" => "1.76",
                "anillo" => "62",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 15,
                "partido" => "Rojo",
                "peso" => "1.74",
                "anillo" => "63",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 15,
                "partido" => "Rojo",
                "peso" => "1.80",
                "anillo" => "64",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 15,
                "partido" => "Rojo",
                "peso" => "1.79",
                "anillo" => "65",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 15,
                "partido" => "Rojo",
                "peso" => "1.76",
                "anillo" => "66",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 16,
                "partido" => "Verde",
                "peso" => "1.83",
                "anillo" => "67",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 16,
                "partido" => "Verde",
                "peso" => "1.82",
                "anillo" => "68",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 16,
                "partido" => "Verde",
                "peso" => "1.84",
                "anillo" => "69",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 16,
                "partido" => "Verde",
                "peso" => "1.75",
                "anillo" => "70",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 17,
                "partido" => "Verde",
                "peso" => "1.83",
                "anillo" => "71",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 17,
                "partido" => "Verde",
                "peso" => "1.82",
                "anillo" => "72",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 17,
                "partido" => "Verde",
                "peso" => "1.84",
                "anillo" => "73",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 17,
                "partido" => "Verde",
                "peso" => "1.75",
                "anillo" => "74",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 18,
                "partido" => "Rojo",
                "peso" => "1.74",
                "anillo" => "75",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 18,
                "partido" => "Rojo",
                "peso" => "1.80",
                "anillo" => "76",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 18,
                "partido" => "Rojo",
                "peso" => "1.79",
                "anillo" => "77",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 18,
                "partido" => "Rojo",
                "peso" => "1.73",
                "anillo" => "135",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 19,
                "partido" => "Rojo",
                "peso" => "1.76",
                "anillo" => "78",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 19,
                "partido" => "Rojo",
                "peso" => "1.74",
                "anillo" => "136",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 19,
                "partido" => "Rojo",
                "peso" => "1.76",
                "anillo" => "137",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 19,
                "partido" => "Rojo",
                "peso" => "1.72",
                "anillo" => "138",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 20,
                "partido" => "Verde",
                "peso" => "1.83",
                "anillo" => "79",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 20,
                "partido" => "Verde",
                "peso" => "1.82",
                "anillo" => "80",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 20,
                "partido" => "Verde",
                "peso" => "1.84",
                "anillo" => "81",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 20,
                "partido" => "Verde",
                "peso" => "1.75",
                "anillo" => "82",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 21,
                "partido" => "Rojo",
                "peso" => "1.74",
                "anillo" => "83",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 21,
                "partido" => "Rojo",
                "peso" => "1.80",
                "anillo" => "84",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 21,
                "partido" => "Rojo",
                "peso" => "1.79",
                "anillo" => "85",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 21,
                "partido" => "Rojo",
                "peso" => "1.76",
                "anillo" => "86",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 22,
                "partido" => "Verde",
                "peso" => "1.73",
                "anillo" => "87",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 22,
                "partido" => "Verde",
                "peso" => "1.73",
                "anillo" => "88",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 22,
                "partido" => "Verde",
                "peso" => "1.75",
                "anillo" => "89",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 22,
                "partido" => "Verde",
                "peso" => "1.77",
                "anillo" => "90",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 23,
                "partido" => "Rojo",
                "peso" => "1.74",
                "anillo" => "231",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 23,
                "partido" => "Rojo",
                "peso" => "1.80",
                "anillo" => "92",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 23,
                "partido" => "Rojo",
                "peso" => "1.79",
                "anillo" => "93",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 23,
                "partido" => "Rojo",
                "peso" => "1.76",
                "anillo" => "94",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 24,
                "partido" => "Verde",
                "peso" => "1.83",
                "anillo" => "95",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 24,
                "partido" => "Verde",
                "peso" => "1.82",
                "anillo" => "96",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 24,
                "partido" => "Verde",
                "peso" => "1.84",
                "anillo" => "97",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 24,
                "partido" => "Verde",
                "peso" => "1.75",
                "anillo" => "98",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 25,
                "partido" => "Rojo",
                "peso" => "1.74",
                "anillo" => "99",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 25,
                "partido" => "Rojo",
                "peso" => "1.80",
                "anillo" => "100",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 25,
                "partido" => "Rojo",
                "peso" => "1.79",
                "anillo" => "101",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 25,
                "partido" => "Rojo",
                "peso" => "1.76",
                "anillo" => "102",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 26,
                "partido" => "Verde",
                "peso" => "1.73",
                "anillo" => "103",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 26,
                "partido" => "Verde",
                "peso" => "1.73",
                "anillo" => "104",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 26,
                "partido" => "Verde",
                "peso" => "1.75",
                "anillo" => "105",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 26,
                "partido" => "Verde",
                "peso" => "1.77",
                "anillo" => "106",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 27,
                "partido" => "Rojo",
                "peso" => "1.74",
                "anillo" => "107",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 27,
                "partido" => "Rojo",
                "peso" => "1.80",
                "anillo" => "108",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 27,
                "partido" => "Rojo",
                "peso" => "1.79",
                "anillo" => "109",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 27,
                "partido" => "Rojo",
                "peso" => "1.76",
                "anillo" => "110",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 28,
                "partido" => "Verde",
                "peso" => "1.83",
                "anillo" => "111",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 28,
                "partido" => "Verde",
                "peso" => "1.82",
                "anillo" => "112",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 28,
                "partido" => "Verde",
                "peso" => "1.84",
                "anillo" => "113",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 28,
                "partido" => "Verde",
                "peso" => "1.75",
                "anillo" => "114",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 29,
                "partido" => "Rojo",
                "peso" => "1.74",
                "anillo" => "115",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 29,
                "partido" => "Rojo",
                "peso" => "1.80",
                "anillo" => "116",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 29,
                "partido" => "Rojo",
                "peso" => "1.79",
                "anillo" => "117",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 29,
                "partido" => "Rojo",
                "peso" => "1.76",
                "anillo" => "118",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 30,
                "partido" => "Verde",
                "peso" => "1.83",
                "anillo" => "119",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 30,
                "partido" => "Verde",
                "peso" => "1.82",
                "anillo" => "120",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 30,
                "partido" => "Verde",
                "peso" => "1.84",
                "anillo" => "121",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 30,
                "partido" => "Verde",
                "peso" => "1.75",
                "anillo" => "122",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 31,
                "partido" => "Rojo",
                "peso" => "1.74",
                "anillo" => "123",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 31,
                "partido" => "Rojo",
                "peso" => "1.80",
                "anillo" => "124",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 31,
                "partido" => "Rojo",
                "peso" => "1.79",
                "anillo" => "125",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 31,
                "partido" => "Rojo",
                "peso" => "1.76",
                "anillo" => "126",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 32,
                "partido" => "Verde",
                "peso" => "1.82",
                "anillo" => "127",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 32,
                "partido" => "Verde",
                "peso" => "1.82",
                "anillo" => "128",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 32,
                "partido" => "Verde",
                "peso" => "1.78",
                "anillo" => "129",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("gallos")->insert(
            array(
                "equipo_id" => 32,
                "partido" => "Verde",
                "peso" => "1.77",
                "anillo" => "130",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
    }
}