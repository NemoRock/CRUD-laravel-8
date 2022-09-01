<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Game $game)
    {

        return view('game.show', compact('game'));
    }
}
