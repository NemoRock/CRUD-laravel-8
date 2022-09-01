<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameGenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 61; $i++) {
            $game = Game::where('id', $i)->first();
            $genre = Genre::where('id', rand(1, 20))->first();
            DB::table('game_genres')->insert([
                'game_id' => $game->id,
                'genre_id' => $genre->id,
            ]);
        }
    }
}
