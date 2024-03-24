<?php

use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/menu', MenuController::class)->name('menu');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
