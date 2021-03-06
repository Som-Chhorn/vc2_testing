<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// User
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);


// Private route
Route::group(["middleware" => ["auth:sanctum"]], function () {


    // User
    Route::post('/logout', [UserController::class, 'logout']);
});
