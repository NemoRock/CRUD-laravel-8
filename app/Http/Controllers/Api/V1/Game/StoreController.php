<?php

namespace App\Http\Controllers\Api\V1\Game;

use App\Http\Controllers\Controller;
use App\Http\Requests\Game\StoreRequest;
use App\Http\Resources\GameResource;
use App\Models\Game;
use App\Models\GameGenre;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $genresIds = $data['genres'] ?? [];

        $game = Game::firstOrCreate([
            'name' => $data['name'],
        ],$data);


        foreach ($genresIds as $genresId){
            GameGenre::firstOrCreate([
                'game_id' => $game->id,
                'genre_id' => $genresId,
            ]);
        }

        return new GameResource($game);
    }
}
