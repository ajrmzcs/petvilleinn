<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/dog-boarding', function () {
    return view('dog-boarding');
})->name('dog-boarding');

Route::get('/cat-boarding', function () {
    return view('cat-boarding');
})->name('cat-boarding');

Route::get('/grooming', function () {
    return view('grooming');
})->name('grooming');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');
