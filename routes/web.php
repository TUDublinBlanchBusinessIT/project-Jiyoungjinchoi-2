<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\GymClassController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MembershipController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Main welcome page
Route::get('/', function () {
    return view('welcome');
});

// Directly go to Users page without login
Route::get('/users', [UserController::class, 'index'])->name('users.index');

// Add to routes/web.php
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Resource routes (CRUD)
Route::resource('users', UserController::class);
Route::resource('trainers', TrainerController::class);
Route::resource('classes', GymClassController::class);
Route::resource('bookings', BookingController::class);
Route::resource('memberships', MembershipController::class);



