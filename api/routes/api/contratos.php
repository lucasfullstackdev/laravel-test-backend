<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContratoController;

Route::get('/', [ContratoController::class, 'index']);
Route::get('/paginate', [ContratoController::class, 'paginate']);
Route::get('/{id}', [ContratoController::class, 'show'])->where('id', '[0-9]+');
