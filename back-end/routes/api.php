<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TestController;

Route::get('/livers', [TestController::class, 'index']);
Route::post('/livers', [TestController::class, 'store']);
Route::get('/livers/{id}', [TestController::class, 'show']);
Route::put('/livers/{id}', [TestController::class, 'update']);
Route::delete('/livers/{id}', [TestController::class, 'destroy']);
