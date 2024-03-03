<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\UploadData;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('game-add', function() {
    return view('game-add');
});

Route::get('home_detail', function() {
    return view('home_detail');
});

Route::get('game-delete', function() {
    return view('game-delete');
});


Route::get('/', [GameController::class, 'setGamesData'])->name('home');

Route::get('detail_game/{id}', [GameController::class, 'fetchgameData'])->name('detail_game');

// DeleteData 
Route::get('game-delete/{id}', [GameController::class, 'deleteGames'])->name('game-delete');

Route::get('game-delete', [GameController::class, 'sendData']);

Route::post('upload', [UploadData::class, 'uploadData'])->name('upload');