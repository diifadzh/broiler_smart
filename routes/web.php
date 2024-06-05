<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Charts\MonitoringDataChart;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route Auth
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/logout', [AuthController::class, 'logout']);

// Route Dashboard
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::middleware('role:admin')->prefix('manage')->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('device', DeviceController::class);
    });
});

//
// Route::get('/dashboard', [DashboardController::class, 'index']);
// Route::get('/dashboard', [DashboardController::class, 'index_dashboard'])->name('dashboard.index');

// Route::get('/user', function () {
//     return view('content.manage.users.index');
// });

// Route::get('/device', function () {
//     return view('content.manage.devices.index');
// });

Route::get('/create', function () {
    return view('content.management.users.create');
});

Route::get('/heater', function () {
    return view('content.config.heater');
});

Route::get('/lamp', function () {
    return view('content.config.lamp');
});