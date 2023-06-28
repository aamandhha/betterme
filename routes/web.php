<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotivationController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\HabbitsController;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('motivation', MotivationController::class);
Route::get('/motivation', [MotivationController::class,'index']);

Route::resource('welcome', LandingPageController::class);
Route::get('/welcome', [LandingPageController::class,'index']);

Route::resource('register', RegisterController::class);
Route::get('/register', [RegisterController::class,'index']);

Route::resource('login', LoginController::class);
Route::get('/login', [LoginController::class,'index']);

Route::resource('logout', LoginController::class);
Route::post('/logout', [LogoutController::class,'store']);

Route::resource('habbit', HabbitsController::class);
Route::get('/habbit', [HabbitsController::class,'index']);

Route::resource('profile', ProfileController::class);
Route::get('/profile', [ProfileController::class,'index']);