<?php

namespace App\Http\Controllers\Api\Game;

use App\Http\Controllers\Controller;
use App\Http\Resources\GameResource;
use App\Models\Game;

class IndexController extends Controller
{
    public function __invoke()
    {
        return GameResource::collection( Game::with('genres')->get());
    }
}
