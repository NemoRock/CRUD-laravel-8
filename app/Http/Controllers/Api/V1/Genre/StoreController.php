<?php

namespace App\Http\Controllers\Api\V1\Genre;

use App\Http\Controllers\Controller;
use App\Http\Requests\Genre\StoreRequest;
use App\Http\Resources\GenreResource;
use App\Models\Genre;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $storeRequest)
    {
        $genre = Genre::create($storeRequest->validated());

        return new GenreResource($genre);
    }
}
