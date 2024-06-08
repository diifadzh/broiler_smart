<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route Auth
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/logout', [AuthController::class, 'logout']);

// Route Dashboard
Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::middleware('role:admin')->prefix('manage')->group(function () {
        Route::resource('users', UserController::class,);
        Route::resource('device', DeviceController::class);
    });
    Route::middleware('role:admin')->prefix('manage')->name('manage.')->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('devices', DeviceController::class);
    });
});