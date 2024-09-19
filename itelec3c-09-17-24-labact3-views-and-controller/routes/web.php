<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/register', [StudentController::class, 'showForm'])->name('student-reg');

Route::post('/register', [StudentController::class, 'submitForm'])->name('student-reg-submit');

Route::fallback(function () {
    $error = "Page Not Found";
    return response()->view('error.errorPage', ['error' => $error], 404);
});
