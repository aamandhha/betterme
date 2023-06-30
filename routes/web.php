<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotivationController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\HabbitsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileEditController;
use App\Http\Controllers\AvatarEditController;



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

Route::resource('logout', LogoutController::class);
Route::post('/logout', [LogoutController::class,'store']);

Route::resource('habbits', HabbitsController::class, ['except' => ['index', 'destroy', 'save']]);
Route::get('{sessionUser}/habbits/{month}', [HabbitsController::class, 'index'])->name('habbits.index');
Route::delete('{sessionUser}/habbits/{habbit}', [HabbitsController::class, 'destroy'])->name('habbits.destroy');
Route::post('{sessionUser}/habbits/save', [HabbitsController::class, 'save'])->name('habbits.save');
Route::post('{sessionUser}/habbits/goal', [HabbitsController::class, 'goal'])->name('habbits.goal');

Route::resource('profile', ProfileController::class, ['except' => ['index']]);
Route::get('{sessionUser}/profile', [ProfileController::class,'index']);

Route::resource('profile', ProfileEditController::class, ['except' => ['index']]);
Route::get('{sessionUser}/profile/edit', [ProfileEditController::class,'index']);

Route::resource('avatar', AvatarEditController::class, ['except' => ['index']]);
Route::get('{sessionUser}/avatar/edit', [AvatarEditController::class,'index']);