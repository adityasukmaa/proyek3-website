<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
Route::get('/', function () {
    return view('landingpage');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// routes/web.php

Route::get('/search', [App\Http\Controllers\SearchController::class, 'index']);
Route::get('/search/{id}', 'SearchController@show');

