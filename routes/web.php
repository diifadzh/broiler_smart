<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/logout', [AuthController::class, 'logout']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('content.dashboard.index');
    });
});

Route::get('/user', function () {
    return view('content.dashboard.user');
});

Route::get('/device', function () {
    return view('content.dashboard.device');
});

Route::get('/create', function () {
    return view('content.management.users.create');
});

Route::get('/heater', function () {
    return view('content.config.heater');
});