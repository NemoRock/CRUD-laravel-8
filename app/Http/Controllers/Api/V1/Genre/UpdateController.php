<?php

namespace App\Http\Controllers\Api\V1\Genre;

use App\Http\Controllers\Controller;
use App\Http\Requests\Genre\UpdateRequest;
use App\Http\Resources\GenreResource;
use App\Models\Genre;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $updateRequest, Genre $genre)
    {
        $genre->update($updateRequest->validated());

        return new GenreResource($genre);
    }
}
