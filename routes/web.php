<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::get('/chi-siamo', function () {
    return view('about-us');
})->name('aboutUs');

Route::get('/servizi', [MovieController::class, 'index'])->name('movies');

Route::get('/movie/detail/{id}', [MovieController::class, 'show'])->name('movie.detail');

Route::get('/contatti', function () {
    return view('contacts');
})->name('contacts');