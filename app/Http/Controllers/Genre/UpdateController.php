<?php

namespace App\Http\Controllers\Genre;

use App\Http\Controllers\Controller;
use App\Http\Requests\Genre\UpdateRequest;
use App\Models\Genre;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Genre $genre)
    {
        $data = $request->validated();
        $genre->update($data);

        return view('genre.show', compact('genre'));
    }
}