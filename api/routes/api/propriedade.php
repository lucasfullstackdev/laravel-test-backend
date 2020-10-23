<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContratoController;
use App\Http\Controllers\PropriedadeController;

Route::get('/', [PropriedadeController::class, 'index']);
Route::get('/{id}', [PropriedadeController::class, 'show'])->where('id', '[0-9]+');
Route::post('/', [PropriedadeController::class, 'store']);
Route::put('/{id}', [PropriedadeController::class, 'update'])->where('id', '[0-9]+');
Route::delete('/{id}', [PropriedadeController::class, 'destroy'])->where('id', '[0-9]+');

Route::post('/{id}/contracts', [ContratoController::class, 'store'])->where('id', '[0-9]+');
Route::get('/{id}/contracts', [ContratoController::class, 'show'])->where('id', '[0-9]+');

