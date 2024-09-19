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
    return view('test.test');
})->name('test');

Route::fallback(function () {
    $error = "Page Not Found";
    return response()->view('test.test', ['error' => $error], 404);
});

Route::prefix('test')->group(function () {
    Route::get('/test-1', function () {
        $testname = 'test-1';
        return response()->view('test.test-1', ['testname' => $testname], 404);
    });
    Route::get('/test-2', function () {
        $testname = 'test-2';
        return response()->view('test.test-2', ['testname' => $testname], 404);
    });
    Route::get('/test-3/{name?}/{age?}/{is_underage?}', function ($name = "", $age = "", $is_underage = null) {
        // Determine if the person is underage
        if (is_numeric($age) && $age < 18) {
            $is_underage = true;
        } else {
            $is_underage = false;
        }
        $age = is_numeric($age) ? (int)$age : null; //optional age
        return view('test.test-3', ['name' => $name, 'age' => $age, 'is_underage' => $is_underage]);
    })->name('test');
    //->name('test')->where('age', '[0-9]+'); if age is required and not null
    // [a-zA-Z0-9\-_]+ alphabet, numeric, dash, underscore allowed
});
