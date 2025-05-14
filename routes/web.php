<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/', [AppController::class, 'home']);
Route::get('/sobre', [AppController::class, 'sobre']);
Route::get('/produtos', [AppController::class, 'produtos']);
