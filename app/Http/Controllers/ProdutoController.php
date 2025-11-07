<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\CategoriasProdutos;

class ProdutoController extends Controller
{

    public function index(Request $request)
    {
        $categorias = CategoriasProdutos::all();
        
        $query = Produto::query();

        if ($request->has('categoria')) {
        }

        $produtos = $query->get();

        return view('produtos', [
            'produtos' => $produtos,
            'categorias' => $categorias
        ]);
    }
}