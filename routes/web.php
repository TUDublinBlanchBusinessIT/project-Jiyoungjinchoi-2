<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\GymClassController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MembershipController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('users', UserController::class);
Route::resource('trainers', TrainerController::class);
Route::resource('classes', GymClassController::class);
Route::resource('bookings', BookingController::class);
Route::resource('memberships', MembershipController::class);
