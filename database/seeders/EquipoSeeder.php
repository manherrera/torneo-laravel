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
    }
}