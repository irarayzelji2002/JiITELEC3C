<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home.home');
})->name('home');

Route::get('/projects', function () {
    return view('pages.projects.projects');
})->name('projects');

Route::get('/projects/{id}', function ($id) {
    return view('pages.projects.sublogger', ['id' => $id]);
})->name('project-details');
