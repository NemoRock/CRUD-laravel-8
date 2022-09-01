<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 21; $i++)
        DB::table('genres')->insert([
            'genre' => 'Genre ' .$i,
        ]);
    }
}
