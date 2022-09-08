<?php

namespace App\Http\Controllers\Api\V1\Game;

use App\Http\Controllers\Controller;
use App\Http\Resources\GameResource;
use App\Models\Game;

class IndexController extends Controller
{
    public function __invoke()
    {
        return GameResource::collection( Game::all());
    }
}
