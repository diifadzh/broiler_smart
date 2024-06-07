<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MainController;

// Route Config data
Route::get('/config/{deviceId}', [MainController::class, 'get_config']);

// Route data
Route::post('/data/{deviceId}', [MainController::class, 'post_data']);
Route::get('/data/{deviceId}', [MainController::class, 'get_data']);

// Route User
Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);

// Route Device
Route::get('/devices', [DeviceController::class, 'index']);
Route::post('/devices', [DeviceController::class, 'post_device']);
Route::get('/devices/{id}', [DeviceController::class, 'show']);
Route::put('/devices/{id}', [DeviceController::class, 'update']);
Route::delete('/devices/{id}', [DeviceController::class, 'destroy']);