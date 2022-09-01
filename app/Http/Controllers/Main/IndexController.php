<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Genre;

class IndexController extends Controller
{
    public function __invoke()
    {
        $gamesCount = count(Game::all());
        $genresCount = count(Genre::all());
        return view('main.index', compact('gamesCount', 'genresCount'));
    }
}
