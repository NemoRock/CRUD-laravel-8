<?php

namespace App\Http\Controllers\Genre;

use App\Http\Controllers\Controller;
use App\Http\Requests\Genre\SearchRequest;
use App\Models\Game;
use App\Models\GameGenre;
use App\Models\Genre;

class SearchController extends Controller
{
    public function __invoke(SearchRequest $searchRequest)
    {
        $data = $searchRequest->validated();

        $g = GameGenre::query()->where('genre_id', $data)->get()->pluck('game_id')->toArray();

        $searchGames = Game::query()->whereIn('id', $g)->paginate(10);

        $genres = Genre::all();
        return view('genre.search', compact('genres', 'searchGames'));
    }
}
