<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use App\Http\Requests\Game\UpdateRequest;
use App\Models\Game;
use App\Models\GameGenre;
use App\Models\Genre;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Game $game)
    {
        $data = $request->validated();

        $genresIds = $data['genres'];
        unset($data['genres']);


        $game->update($data);


        foreach ($genresIds as $genresId){
            GameGenre::firstOrCreate([
                'game_id' => $game->id,
                'genre_id' => $genresId,
            ]);
        }

        return view('game.show', compact('game'));
    }
}
