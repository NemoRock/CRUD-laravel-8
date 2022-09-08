<?php

namespace App\Http\Controllers\Api\V1\Game;

use App\Http\Controllers\Controller;
use App\Http\Resources\GameResource;
use App\Models\Game;

class ShowController extends Controller
{
    public function __invoke($id)
    {
        return new GameResource(Game::findOrFail($id));
    }
}
