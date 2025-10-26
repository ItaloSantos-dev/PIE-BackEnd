<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/paginainicial', function(){
    return view('paginainicial');
})->name('paginainicial');


Route::get('/sobre', function(){
    return view('sobrenos');
})->name('sobrenos');

Route::get('/contato', function(){
    return view('contato');
})->name('contato');