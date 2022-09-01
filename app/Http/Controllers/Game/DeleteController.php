<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Game $game)
    {
        $game -> delete();

        return redirect()->route('game.index');
    }
}
