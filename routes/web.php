<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'index'])->name('login.form');

Route::get('/paginainicial', [PaginaController::class, 'index'])->name('paginainicial');

Route::get('/sobre', [PaginaController::class, 'sobre'])->name('sobrenos');

Route::get('/contato', [PaginaController::class, 'contato'])->name('contato');

Route::get('/eventos', [EventoController::class, 'index'])->name('evento');

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos');

?>

