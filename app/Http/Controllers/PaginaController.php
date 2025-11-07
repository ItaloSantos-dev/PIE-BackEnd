<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function index()
    {
        return view('paginainicial');
    }

    public function sobre()
    {
        return view('sobrenos');
    }

    public function contato()
    {
        return view('contato');
    }
}