<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login', [\App\Http\Controllers\UserController::class, 'login']);
Route::post('/register', [\App\Http\Controllers\UserController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout']);
    Route::apiResource('villains', \App\Http\Controllers\VillainController::class);
    Route::apiResource('statuses', \App\Http\Controllers\StatusController::class);
    Route::apiResource('levels', \App\Http\Controllers\VillainLevelController::class);
});
