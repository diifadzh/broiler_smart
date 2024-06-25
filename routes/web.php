<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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
        // --- Heater Config Route
        Route::get('heater', [ConfigHeaterController::class, 'index']);
        Route::post('heater/update', [ConfigHeaterController::class, 'update'])->name('heater.update');
        Route::post('heater/detail', [ConfigHeaterController::class, 'show'])->name('heater.show');

        // --- Lamp Config Route
        Route::get('lamp', [ConfigLampController::class, 'index']);
        Route::post('lamp/update', [ConfigLampController::class, 'update'])->name('lamp.update');
        Route::post('lamp/detail', [ConfigLampController::class, 'show'])->name('lamp.show');
    });
    //
    Route::middleware('role:admin')->prefix('manage')->name('manage.')->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('devices', DeviceController::class);
        Route::resource('employee', EmployeeController::class);
    });
});

Route::get('/detail', [DashboardController::class, 'detail'])->name('detail');

// Route::post( '/publish', [DataController :class, 'publish']
// )->name('publish');
