<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use App\Http\Requests\Game\StoreRequest;
use App\Models\Game;
use App\Models\GameGenre;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $genresIds = $data['genres'] ?? [];

//        unset($data['genres']);

        $game = Game::firstOrCreate([
            'name' => $data['name'],
            ],$data);

        foreach ($genresIds as $genresId){
            GameGenre::firstOrCreate([
               'game_id' => $game->id,
                'genre_id' => $genresId,
            ]);
        }

        return redirect()->route('game.index');
    }
}
