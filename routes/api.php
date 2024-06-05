<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MainController;

//
Route::get('/config/{deviceId}', [MainController::class, 'get_config']);
Route::post('/data/{deviceId}', [MainController::class, 'post_data']);

//
Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);

//
Route::get('/devices', [UserController::class, 'index']);
Route::post('/devices', [UserController::class, 'store']);
Route::get('/devices/{id}', [UserController::class, 'show']);
Route::put('/devices/{id}', [UserController::class, 'update']);
Route::delete('/devices/{id}', [UserController::class, 'destroy']);
