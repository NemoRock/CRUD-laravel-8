<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $genres = Genre::all();
        return view('game.create', compact('genres'));
    }
}
