<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ji_billController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::get('/bill', [Ji_billController::class, 'showForm'])->name('billing-form');

Route::post('/bill', [Ji_billController::class, 'submitForm'])->name('billing-submit');

// Route::get('/bill-details',function () {
//     return view('bill.billDetails');
// })->name('bill-details');

Route::fallback(function () {
    $error = "Page Not Found";
    return response()->view('error.errorPage', ['error' => $error], 404);
});

Route::get('/test-db-connection', function () {
    try {
        // Try to fetch data from a table (replace 'your_table' with an existing table name)
        $results = DB::table('bills')->first();
        return response()->json($results);
    } catch (Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
});
