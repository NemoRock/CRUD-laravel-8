<?php

namespace App\Http\Controllers\Genre;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __invoke()
    {
        $genres = Genre::paginate(10);
        return view('genre.index', compact('genres'));
    }
}
