<?php

namespace App\Http\Controllers\Api\Genre;

use App\Http\Controllers\Controller;
use App\Http\Resources\GameResource;
use App\Http\Resources\GenreResource;
use App\Models\Genre;

class ShowController extends Controller
{
    public function __invoke($id)
    {
        return new GenreResource(Genre::with('games')->findOrFail($id));
    }
}
