<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\AuthController;

// Rotas de Autenticação
Route::get('/', [AuthController::class, 'index'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register.form');
Route::post('/register', [AuthController::class, 'store'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rotas Públicas
Route::get('/paginainicial', [PaginaController::class, 'index'])->name('paginainicial');
Route::get('/sobre', [PaginaController::class, 'sobre'])->name('sobrenos');
Route::get('/contato', [PaginaController::class, 'contato'])->name('contato');

// Rotas Públicas de Visualização
Route::get('/eventos', [EventoController::class, 'index'])->name('evento');
Route::get('/eventos/{id}', [EventoController::class, 'show'])->name('eventos.show');
Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos');

// Rotas Administrativas - Produtos (Protegidas)
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/produtos/create', [ProdutoController::class, 'create'])->name('produtos.create');
    Route::post('/produtos', [ProdutoController::class, 'store'])->name('produtos.store');
    Route::get('/produtos/{id}/edit', [ProdutoController::class, 'edit'])->name('produtos.edit');
    Route::put('/produtos/{id}', [ProdutoController::class, 'update'])->name('produtos.update');
    Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy'])->name('produtos.destroy');
});

// Rotas Administrativas - Eventos (Protegidas)
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/eventos/create', [EventoController::class, 'create'])->name('eventos.create');
    Route::post('/eventos', [EventoController::class, 'store'])->name('eventos.store');
    Route::get('/eventos/{id}/edit', [EventoController::class, 'edit'])->name('eventos.edit');
    Route::put('/eventos/{id}', [EventoController::class, 'update'])->name('eventos.update');
    Route::delete('/eventos/{id}', [EventoController::class, 'destroy'])->name('eventos.destroy');
});
