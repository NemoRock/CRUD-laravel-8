<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/home', \App\Http\Controllers\Main\IndexController::class)->name('main.index');

Route::group(['prefix' => 'games'], function (){
    Route::get('/', \App\Http\Controllers\Game\IndexController::class)->name('game.index');
    Route::get('/create', \App\Http\Controllers\Game\CreateController::class)->name('game.create');
    Route::post('/', \App\Http\Controllers\Game\StoreController::class)->name('game.store');
    Route::get('/{game}/edit', \App\Http\Controllers\Game\EditController::class)->name('game.edit');
    Route::get('/{game}', \App\Http\Controllers\Game\ShowController::class)->name('game.show');
    Route::patch('/{game}', \App\Http\Controllers\Game\UpdateController::class)->name('game.update');
    Route::delete('/{game}', \App\Http\Controllers\Game\DeleteController::class)->name('game.delete');
});

Route::group(['prefix' => 'genres'], function (){
    Route::get('/', \App\Http\Controllers\Genre\IndexController::class)->name('genre.index');
    Route::get('/create', \App\Http\Controllers\Genre\CreateController::class)->name('genre.create');
    Route::post('/', \App\Http\Controllers\Genre\StoreController::class)->name('genre.store');
    Route::get('/{genre}/edit', \App\Http\Controllers\Genre\EditController::class)->name('genre.edit');
    Route::get('/{genre}', \App\Http\Controllers\Genre\ShowController::class)->name('genre.show');
    Route::patch('/{genre}', \App\Http\Controllers\Genre\UpdateController::class)->name('genre.update');
    Route::delete('/{genre}', \App\Http\Controllers\Genre\DeleteController::class)->name('genre.delete');
});
