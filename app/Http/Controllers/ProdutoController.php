<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\CategoriasProdutos;
use Illuminate\Support\Facades\Storage;

class ProdutoController extends Controller
{
    /**
     * Exibe a lista de produtos (público)
     */
    public function index(Request $request)
    {
        $categorias = CategoriasProdutos::all();

        $query = Produto::query();

        if ($request->has('categoria') && $request->categoria != '') {
            $query->where('id_categoria', $request->categoria);
        }

        $produtos = $query->get();

        return view('produtos', [
            'produtos' => $produtos,
            'categorias' => $categorias
        ]);
    }

    /**
     * Exibe o formulário de criação de produto (admin)
     */
    public function create()
    {
        $categorias = CategoriasProdutos::all();
        return view('produtos.create', compact('categorias'));
    }

    /**
     * Salva um novo produto (admin)
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'preco' => 'required|numeric|min:0',
            'id_categoria' => 'required|exists:categorias_produtos,id_categoria',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload da imagem se fornecida
        if ($request->hasFile('imagem')) {
            $validated['imagem'] = $request->file('imagem')->store('produtos', 'public');
        }

        Produto::create($validated);

        return redirect()->route('produtos.index')->with('success', 'Produto criado com sucesso!');
    }

    /**
     * Exibe o formulário de edição de produto (admin)
     */
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        $categorias = CategoriasProdutos::all();
        return view('produtos.edit', compact('produto', 'categorias'));
    }

    /**
     * Atualiza um produto existente (admin)
     */
    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);

        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'preco' => 'required|numeric|min:0',
            'id_categoria' => 'required|exists:categorias_produtos,id_categoria',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload da nova imagem se fornecida
        if ($request->hasFile('imagem')) {
            // Deleta a imagem antiga se existir
            if ($produto->imagem) {
                Storage::disk('public')->delete($produto->imagem);
            }
            $validated['imagem'] = $request->file('imagem')->store('produtos', 'public');
        }

        $produto->update($validated);

        return redirect()->route('produtos.index')->with('success', 'Produto atualizado com sucesso!');
    }

    /**
     * Remove um produto (admin)
     */
    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);

        // Deleta a imagem se existir
        if ($produto->imagem) {
            Storage::disk('public')->delete($produto->imagem);
        }

        $produto->delete();

        return redirect()->route('produtos.index')->with('success', 'Produto removido com sucesso!');
    }
}
