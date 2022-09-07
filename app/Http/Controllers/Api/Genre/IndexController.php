<?php

namespace App\Http\Controllers\Api\Genre;

use App\Http\Controllers\Controller;
use App\Http\Resources\GameResource;
use App\Http\Resources\GenreResource;
use App\Models\Genre;

class IndexController extends Controller
{
    public function __invoke()
    {
        return GenreResource::collection( Genre::with('games')->get());
    }
}
