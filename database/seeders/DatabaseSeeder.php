<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\GameGenre;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
           GenresTableSeeder::class,
           GamesTableSeeder::class,
           GameGenresTableSeeder::class,
           GameGenresTableSeeder::class,
        ]);
    }
}
