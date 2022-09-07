<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'games'], function (){
    Route::get('/', \App\Http\Controllers\Api\Game\IndexController::class);
    Route::post('/', \App\Http\Controllers\Api\Game\StoreController::class);
    Route::get('/{game}', \App\Http\Controllers\Api\Game\ShowController::class);
    Route::patch('/{game}', \App\Http\Controllers\Api\Game\UpdateController::class);
    Route::delete('/{game}', \App\Http\Controllers\Api\Game\DeleteController::class);
});

Route::group(['prefix' => 'genres'], function (){
    Route::get('/', \App\Http\Controllers\Api\Genre\IndexController::class);
    Route::post('/', \App\Http\Controllers\Api\Genre\StoreController::class);
    Route::get('/{genre}', \App\Http\Controllers\Api\Genre\ShowController::class);
    Route::patch('/{genre}', \App\Http\Controllers\Api\Genre\UpdateController::class);
    Route::delete('/{genre}', \App\Http\Controllers\Api\Genre\DeleteController::class);
});
