<?php

namespace App\Http\Controllers\Api\V1\Game;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Response;

class DeleteController extends Controller
{
    public function __invoke(Game $game)
    {
        $game->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
