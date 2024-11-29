<?php

use App\Http\Controllers\WorkshopController;
use Illuminate\Support\Facades\Route;

Route::get('workshop', [WorkshopController::class, 'index']);
Route::get('workshop/create', [WorkshopController::class, 'create']);
Route::post('workshop', [WorkshopController::class, 'store']);
Route::get('workshop/{id}/edit', [WorkshopController::class, 'edit']);
Route::put('workshop/{id}', [WorkshopController::class, 'update']);
Route::delete('workshop/{id}', [WorkshopController::class, 'destroy']);