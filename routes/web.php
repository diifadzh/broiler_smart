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
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::middleware('role:farmer')->prefix('config')->name('config.')->group(function () {
        Route::get('heater', [ConfigHeaterController::class, 'index']);
        Route::get('lamp', [ConfigLampController::class, 'index']);
    });
    Route::middleware('role:admin')->prefix('manage')->name('manage.')->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('devices', DeviceController::class);
    });
});

// Route :post( '/publish', [DataController :class, 'publish']
// ) >name('publish');