<?php

use Illuminate\Support\Facades\Route;

// Main route
Route::get('/', function() {
    return view('welcome');
});

// View route, using whithout controller
Route::view('/welcome', 'welcome');

use App\Http\Controllers\UserController;
Route::get('users',[UserController::class, 'index']);