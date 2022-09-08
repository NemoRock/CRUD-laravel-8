<?php

namespace App\Http\Controllers\Api\V1\Genre;

use App\Http\Controllers\Controller;
use App\Http\Resources\GenreResource;
use App\Models\Genre;

class IndexController extends Controller
{
    public function __invoke()
    {
        return GenreResource::collection( Genre::all());
    }
}
