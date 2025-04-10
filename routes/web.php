<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RankController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/tournament', function () {
    return view('tournament');
})->name('tournament');

Route::get('/rank', [RankController::class, 'index'])->name('rank');

Route::get('/players', function () {
    return view('players');
})->name('players');

Route::get('/rules', function () {
    return view('rules');
})->name('rules');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
