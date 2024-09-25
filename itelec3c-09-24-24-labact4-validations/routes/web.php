<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::get('/reservation', [ReservationController::class, 'showForm'])->name('reservation-form');

Route::post('/reservation', [ReservationController::class, 'submitForm'])->name('reservation-submit');

// Route::get('/reservation-details',function () {
//     return view('reservation.reservationDetails');
// })->name('reservation-details');

Route::fallback(function () {
    $error = "Page Not Found";
    return response()->view('error.errorPage', ['error' => $error], 404);
});
