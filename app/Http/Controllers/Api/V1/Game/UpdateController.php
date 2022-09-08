<?php

namespace App\Http\Controllers\Api\V1\Game;

use App\Http\Controllers\Controller;
use App\Http\Requests\Game\UpdateRequest;
use App\Http\Resources\GameResource;
use App\Models\Game;
use App\Models\GameGenre;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Game $game)
    {
        $data = $request->validated();

        $genresIds = $data['genres']??[];
        unset($data['genres']);


        $game->update($data);


        foreach ($genresIds as $genresId){
            GameGenre::firstOrCreate([
                'game_id' => $game->id,
                'genre_id' => $genresId,
            ]);
        }
        return new GameResource($game);
    }
}
