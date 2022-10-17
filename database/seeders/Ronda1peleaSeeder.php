<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Gallo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class Ronda1peleaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $peleador1[] = DB::select('SELECT anillo FROM gallos ORDER BY ABS(id) ASC, RAND() LIMIT 64');
        $peleador2[] = DB::select('SELECT anillo FROM gallos ORDER BY ABS(id) DESC, RAND() LIMIT 64');
        
        $newpeleador1 = array();
        $newpeleador2 = array();

        $faker = Faker::create();
        $pelea = [Gallo::count()/2];
            for ($i=0; $i < $pelea; $i++) {
                  \DB::table("ronda1peleas")->insert(
                        array(
                              'peleador1'  => $peleador1,
                              'peleador2'  => $peleador2,
                        )
                  );
            }

    }
}