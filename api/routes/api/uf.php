<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UfController;

Route::get('/', [UfController::class, 'index']);
Route::get('/{id}', [UfController::class, 'show'])->where('id', '[0-9]+');
Route::post('/', [UfController::class, 'store']);
Route::put('/{id}', [UfController::class, 'update'])->where('id', '[0-9]+');
Route::delete('/{id}', [UfController::class, 'destroy'])->where('id', '[0-9]+');
