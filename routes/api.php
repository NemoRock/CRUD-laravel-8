<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'games'], function (){
    Route::get('/', \App\Http\Controllers\Api\V1\Game\IndexController::class);
    Route::post('/', \App\Http\Controllers\Api\V1\Game\StoreController::class);
    Route::get('/{game}', \App\Http\Controllers\Api\V1\Game\ShowController::class);
    Route::patch('/{game}', \App\Http\Controllers\Api\V1\Game\UpdateController::class);
    Route::delete('/{game}', \App\Http\Controllers\Api\V1\Game\DeleteController::class);
});

Route::group(['prefix' => 'genres'], function (){
    Route::get('/', \App\Http\Controllers\Api\V1\Genre\IndexController::class);
    Route::get('/search/{genre}', \App\Http\Controllers\Api\V1\Genre\SearchController::class);
    Route::post('/', \App\Http\Controllers\Api\V1\Genre\StoreController::class);
    Route::get('/{genre}', \App\Http\Controllers\Api\V1\Genre\ShowController::class);
    Route::patch('/{genre}', \App\Http\Controllers\Api\V1\Genre\UpdateController::class);
    Route::delete('/{genre}', \App\Http\Controllers\Api\V1\Genre\DeleteController::class);
});
