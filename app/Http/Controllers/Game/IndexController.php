<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $games = Game::paginate(10);
        return view('game.index', compact('games'));
    }
}
