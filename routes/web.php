<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/', [Appcontroller::class, 'home']);
Route::get('/sobre', [Appcontroller::class, 'sobre']);
Route::get('/produtos', [Appcontroller::class, 'produtos']);
Route::get('/contatos', [Appcontroller::class, 'contatos']);

//Formulario de cadastro de produto
Route::get('/frmproduto',[AppController::class, 'frmproduto']);

//lógica de cadastro do produto
Route::post('/addproduto', [AppController::class, 'addproduto']);