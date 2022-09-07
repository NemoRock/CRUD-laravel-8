<?php

namespace App\Http\Controllers\Api\Game;

use App\Http\Controllers\Controller;
use App\Http\Requests\Game\StoreRequest;
use App\Http\Resources\GameResource;
use App\Models\Game;
use http\Client\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $storeRequest)
    {
        $created_game = Game::create($storeRequest->all());

        return new GameResource($created_game);
    }
}
