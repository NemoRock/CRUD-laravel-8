<?php

namespace App\Http\Controllers\Genre;

use App\Http\Controllers\Controller;
use App\Http\Requests\Genre\StoreRequest;
use App\Models\Genre;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Genre::firstOrCreate([
            'genre' => $data['genre']
            ], $data);

        return redirect()->route('genre.index');
    }
}
