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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('auth')->group(function () {
    Route::post('/register', [\App\Http\Controllers\Web3LoginControllerController::class, 'register']);
    Route::post('/login', [\App\Http\Controllers\Web3LoginController::class, 'login']);

    Route::get('/nonce/{type?}', [\App\Http\Controllers\Web3LoginController::class, 'nonce']);
});

