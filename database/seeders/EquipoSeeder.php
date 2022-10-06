<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table("equipos")->insert(
            [
                'name' => 'Hernandez',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Jimenez',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Mendoza',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Gutierrez',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Estrada',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Ramirez',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Gomez',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Martinez',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Rosas',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Sanchez',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Trujillo',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Alba',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Castillo',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Pedraza',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Beltran',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Trinidad',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Rodriguez',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Sanabria',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Lopez',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Andrade',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Castro',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Perez',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Bastida',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Solis',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Peralta',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Cortes',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Paredes',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Rios',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Mancilla',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Terrazas',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Chavez',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Felix',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Padilla',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("equipos")->insert(
            [
                'name' => 'Medina',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}