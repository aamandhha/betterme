<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotivationController;
use App\Http\Controllers\LandingPageController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('motivation', MotivationController::class);
Route::get('/motivation', [MotivationController::class,'index']);

Route::resource('welcome', LandingPageController::class);
Route::get('/welcome', [LandingPageController::class,'index']);

