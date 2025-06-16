<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/', [Appcontroller::class, 'home']);
Route::get('/sobre', [Appcontroller::class, 'sobre']);
Route::get('/produtos', [Appcontroller::class, 'produtos']);
Route::get('/contatos', [Appcontroller::class, 'contatos']);

Route::get('/frmproduto',[AppController::class, 'frmproduto']);
Route::post('/addproduto', [AppController::class, 'addproduto']);

Route::get('/frmusuario', [AppController::class, 'frmusuario']);
Route::post('/addusuario', [AppController::class, 'addusuario']);

Route::get('/usuarios', [AppController::class, 'usuarios']);
Route::get('/frmeditusuarios/{id}', [AppController::class, 'frmeditusuario']); 
Route::put('/atualizarusuario/{id}', [AppController::class, 'atualizarusuario']); 
Route::delete('/excluirusuario/{id}', [AppController::class, 'excluirusuario']);

Route::get('/frmlogin', [AppController::class, 'frmlogin']);
Route::post('/logar', [AppController::class, 'logar']);
Route::get('/dashboard', [AppController::class, 'dashboard']);
Route::get('/logout', [AppController::class, 'logout']);
