<?php

namespace App\Http\Controllers\Genre;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Genre $genre)
    {
        $genre -> delete();

        return redirect()->route('genre.index');
    }
}
