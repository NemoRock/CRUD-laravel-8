<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 61; $i++)
            DB::table('games')->insert([
                'name' => 'Game ' .$i,
                'studio_developer' => 'Studio developer '. $i,
            ]);
    }
}
