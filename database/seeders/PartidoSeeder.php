<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PartidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table("partidos")->insert(
            [
                'name' => 'Partido Verde',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("partidos")->insert(
            [
                'name' => 'Partido Rojo',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
