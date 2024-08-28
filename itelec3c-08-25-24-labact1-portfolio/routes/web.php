<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home.home');
})->name('home');

Route::get('/home', function () {
    return view('pages.home.home');
})->name('homepage');
