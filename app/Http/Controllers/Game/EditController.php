<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\GameGenre;
use App\Models\Genre;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Game $game)
    {
        $genres = Genre::all();

        $genreGame = ($game->genres()->pluck('genre_id')->toArray());

        foreach ($genreGame as $genresId){
            GameGenre::where('game_id', $game->id)->delete();
        }

        return view('game.edit', compact('game', 'genres', 'genreGame'));
    }
}
