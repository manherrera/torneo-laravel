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
                "id" => "11",
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
                "id" => "12",
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
                "id" => "13",
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
                "id" => "14",
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
                "id" => "15",
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
                "id" => "16",
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
                "id" => "17",
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
                "id" => "18",
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
                "id" => "19",
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
                "id" => "20",
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
                "id" => "21",
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
                "id" => "22",
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
                "id" => "23",
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
                "id" => "24",
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
                "id" => "25",
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
                "id" => "26",
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
                "id" => "27",
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
                "id" => "28",
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
                "id" => "29",
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
                "id" => "30",
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
                "id" => "31",
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
                "id" => "32",
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
                "id" => "33",
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
                "id" => "34",
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
                "id" => "35",
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
                "id" => "36",
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
                "id" => "37",
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
                "id" => "38",
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
                "id" => "39",
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
                "id" => "40",
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
                "id" => "41",
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
                "id" => "42",
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
                "id" => "43",
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
                "id" => "44",
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
                "id" => "45",
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
                "id" => "46",
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
                "id" => "47",
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
                "id" => "48",
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
                "id" => "49",
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
                "id" => "50",
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
                "id" => "51",
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
                "id" => "52",
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
                "id" => "53",
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
                "id" => "331",
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
                "id" => "132",
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
                "id" => "133",
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
                "id" => "134",
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
                "id" => "54",
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
                "id" => "55",
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
                "id" => "56",
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
                "id" => "57",
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
                "id" => "58",
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
                "id" => "59",
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
                "id" => "60",
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
                "id" => "61",
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
                "id" => "62",
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
                "id" => "63",
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
                "id" => "64",
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
                "id" => "65",
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
                "id" => "66",
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
                "id" => "67",
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
                "id" => "68",
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
                "id" => "69",
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
                "id" => "70",
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
                "id" => "71",
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
                "id" => "72",
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
                "id" => "73",
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
                "id" => "74",
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
                "id" => "75",
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
                "id" => "76",
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
                "id" => "77",
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
                "id" => "135",
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
                "id" => "78",
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
                "id" => "136",
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
                "id" => "137",
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
                "id" => "138",
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
                "id" => "79",
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
                "id" => "80",
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
                "id" => "81",
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
                "id" => "82",
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
                "id" => "83",
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
                "id" => "84",
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
                "id" => "85",
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
                "id" => "86",
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
                "id" => "87",
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
                "id" => "88",
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
                "id" => "89",
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
                "id" => "90",
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
                "id" => "231",
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
                "id" => "92",
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
                "id" => "93",
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
                "id" => "94",
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
                "id" => "95",
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
                "id" => "96",
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
                "id" => "97",
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
                "id" => "98",
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
                "id" => "99",
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
                "id" => "100",
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
                "id" => "101",
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
                "id" => "102",
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
                "id" => "103",
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
                "id" => "104",
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
                "id" => "105",
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
                "id" => "106",
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
                "id" => "107",
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
                "id" => "108",
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
                "id" => "109",
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
                "id" => "110",
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
                "id" => "111",
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
                "id" => "112",
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
                "id" => "113",
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
                "id" => "114",
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
                "id" => "115",
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
                "id" => "116",
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
                "id" => "117",
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
                "id" => "118",
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
                "id" => "119",
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
                "id" => "120",
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
                "id" => "121",
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
                "id" => "122",
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
                "id" => "123",
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
                "id" => "124",
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
                "id" => "125",
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
                "id" => "126",
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
                "id" => "127",
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
                "id" => "128",
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
                "id" => "129",
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
                "id" => "130",
                "puntos" => "0",
                "estado" => "activo",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
    }
}