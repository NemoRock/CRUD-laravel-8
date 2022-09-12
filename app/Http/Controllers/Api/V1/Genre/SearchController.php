<?php

namespace App\Http\Controllers\Api\V1\Genre;

use App\Http\Controllers\Controller;
use App\Http\Resources\GameResource;
use App\Models\Game;
use App\Models\GameGenre;

class SearchController extends Controller
{
    public function __invoke($id)
    {
        $searchGameIds = GameGenre::query()->where('genre_id', $id)->get()->pluck('game_id')->toArray();

        return  GameResource::collection(Game::query()->whereIn('id', $searchGameIds)->get());
    }
}
