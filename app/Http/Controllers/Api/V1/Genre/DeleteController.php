<?php

namespace App\Http\Controllers\Api\V1\Genre;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Response;

class DeleteController extends Controller
{
    public function __invoke(Genre $genre)
    {
        $genre->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
