<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home.home');
})->name('home');

Route::get('/home', function () {
    return view('pages.home.home');
})->name('homepage');

Route::get('/developer-projects', function () {
    return view('pages.projects.developer-projects');
})->name('developer-projects');

Route::get('/design-projects', function () {
    return view('pages.projects.design-projects');
})->name('design-projects');

Route::get('/about-me', function () {
    return view('pages.about-me');
})->name('about-me');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/projects/{type}/{name}', function ($type, $name) {
    return view('pages.projects.'.$type.'.'.$name);
})->name('project-details');

Route::get('/test', function () {
    return view('test');
})->name('test');
