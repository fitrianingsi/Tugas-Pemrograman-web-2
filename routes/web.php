<?php

use App\Http\Controllers\MovieController;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'upcomingMovie' => Movie::where('status', 'akan_tayang')->latest()->first(),
        'movies' => Movie::where('status', 'sedang_tayang')->get()
    ]);
});

Route::get('/movie', [MovieController::class, 'index']);
Route::get('/movie/create', [MovieController::class, 'create']);
Route::post('/movie', [MovieController::class, 'store']);
Route::get('/movie/{movie}/edit', [MovieController::class, 'edit']);
Route::put('/movie/{movie}', [MovieController::class, 'update']);
Route::delete('/movie/{movie}', [MovieController::class, 'destroy']);
