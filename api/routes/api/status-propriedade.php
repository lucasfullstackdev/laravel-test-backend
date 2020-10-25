<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusPropriedadeController;

Route::get('/', [StatusPropriedadeController::class, 'index']);
Route::get('/paginate', [StatusPropriedadeController::class, 'paginate']);
Route::get('/{id}', [StatusPropriedadeController::class, 'show'])->where('id', '[0-9]+');
Route::post('/', [StatusPropriedadeController::class, 'store']);
Route::put('/{id}', [StatusPropriedadeController::class, 'update'])->where('id', '[0-9]+');
Route::delete('/{id}', [StatusPropriedadeController::class, 'destroy'])->where('id', '[0-9]+');
