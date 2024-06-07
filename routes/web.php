<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('landingpage');
});

Auth::routes();
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login','login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// routes/web.php

Route::get('/search', [App\Http\Controllers\SearchController::class, 'index']);
Route::get('/search/{id}', 'SearchController@show');

