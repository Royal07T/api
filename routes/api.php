<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;

// API Resource Route for ProductController
Route::apiResource('products', ProductController::class);

// Authenticated User Route (Requires Sanctum Authentication)
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
