<?php

namespace App\Http\Controllers\Api\Genre;

use App\Http\Controllers\Controller;
use App\Http\Requests\Genre\StoreRequest;
use App\Http\Resources\GenreResource;
use App\Models\Genre;
use http\Client\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $storeRequest)
    {
        $created_genre = Genre::create($storeRequest->all());

        return new GenreResource($created_genre);
    }
}
