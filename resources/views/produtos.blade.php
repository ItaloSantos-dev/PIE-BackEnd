@extends('layouts.main')
@section('titulo', 'Produtos')
@section('style')
<link rel="stylesheet" href="{{asset('css/styles-produtos.css')}}">
@endsection
    
@section('content')

    <main class="main-content">
        <aside class="sidebar">
            <h3>Categorias</h3>
            <ul class="categoria-list">
                <li>
                    {{-- O 'ativo' aqui tem que ser dinâmico, mas vamos deixar fixo por enquanto --}}
                    <a class="categoria-link {{ request('categoria') ? '' : 'ativo' }}" href="{{ route('produtos') }}">
                        Todas as Categorias
                    </a>
                </li>
                {{-- Loop para as categorias do banco --}}
                @foreach($categorias as $categoria)
                <li>
                    {{-- O link agora recarrega a página com um filtro (query string) --}}
                    <a class="categoria-link {{ request('categoria') == $categoria->id_categoria ? 'ativo' : '' }}" 
                       href="{{ route('produtos', ['categoria' => $categoria->id_categoria]) }}">
                        {{ $categoria->nome_categoria }}
                    </a>
                </li>
                @endforeach
            </ul>
        </aside>

        <section class="produtos-section">
            <h2 id="titulo-produtos">Todos os Produtos</h2>
            <div class="produtos-grid" id="produtos-grid">
                
                @if($produtos->isEmpty())
                    <p class="text-center text-muted fs-5">Nenhum produto cadastrado nesta categoria.</p>
                @endif

                {{-- LOOP PARA OS PRODUTOS DO BANCO --}}
                @foreach($produtos as $produto)
                <div class="produto-card" 
                     {{-- O MAIS IMPORTANTE: data-attributes para o JS ler --}}
                     data-id="{{ $produto->id_produto }}"
                     data-nome="{{ $produto->nome }}"
                     data-preco="{{ $produto->preco }}"
                     data-descricao="{{ $produto->descricao }}"
                     {{-- Precisamos garantir que o estoque existe --}}
                     data-estoque="{{ $produto->estoque ? $produto->estoque->quantidade : 0 }}"
                     {{-- A imagem precisa vir do banco. Se não tiver, usamos um placeholder --}}
                     data-imagem="{{ $produto->imagem ? asset('storage/imagens_produtos/' . $produto->imagem) : 'data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23e8dfd6%22 width=%22200%22 height=%22200%22/%3E%3C/svg%3E' }}"
                     >
                    <div class="produto-imagem">
                        <img src="{{ $produto->imagem ? asset('storage/imagens_produtos/' . $produto->imagem) : 'data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23e8dfd6%22 width=%22200%22 height=%22200%22/%3E%3C/svg%3E' }}" alt="{{ $produto->nome }}">
                    </div>
                    <div class="produto-info">
                        <h3>{{ $produto->nome }}</h3>
                        {{-- O Str::limit limita a descrição para 80 caracteres --}}
                        <p class="produto-descricao">{{ Str::limit($produto->descricao, 80) }}</p>
                        <div class="produto-footer">
                            <span class="preco">R$ {{ number_format($produto->preco, 2, ',', '.') }}</span>
                            <div class="produto-acoes">
                                {{-- Passamos 'this' (o card todo) para o JS saber de onde ler os dados --}}
                                <button class="btn btn-info" onclick="abrirDetalhes(this)">Ver</button>
                                <button class="btn btn-carrinho" onclick="adicionarRapido(this)">Carrinho</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </section>
    </main>

    <div id="modal-detalhes" class="modal">
        <div class="modal-content">
            <span class="close" onclick="fecharModal()">&times;</span>
            <div class="modal-body">
                <div class="modal-imagem">
                    <img id="modal-img" src="" alt="">
                </div>
                <div class="modal-info">
                    <h2 id="modal-nome"></h2>
                    <div class="modal-preco" id="modal-preco"></div>
                    <div class="modal-estoque" id="modal-estoque"></div>
                    <div class="modal-descricao" id="modal-descricao"></div>
                    <div class="quantidade-selector">
                        <label for="modal-quantidade">Quantidade:</label>
                        <input type="number" id="modal-quantidade" value="1" min="1">
                    </div>
                    <div class="modal-acoes">
                        <button class="btn btn-carrinho" onclick="adicionarAoCarrinho()">Adicionar ao Carrinho</button>
                        <button class="btn btn-info" onclick="fecharModal()">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-carrinho" class="modal">
        <div class="modal-content carrinho-modal-content">
            <span class="close" onclick="fecharCarrinho()">&times;</span>
            <h2>Meu Carrinho</h2>
            <div id="carrinho-conteudo">
                </div>
        </div>
    </div>
@endsection


@section('scripts')
    {{-- O script-produtos.js ainda é necessário, mas vamos modificá-lo --}}
    <script src="{{asset('js/script-produtos.js')}}"></script>

    {{-- Esse é o novo JS que vai "corrigir" o script antigo --}}
    <script>
        // ========================================
        // DADOS DOS PRODUTOS
        // ========================================
        // O array 'const produtos' que estava em script-produtos.js NÃO É MAIS USADO.
        // Os dados agora são lidos do HTML.

        // Apagamos as funções que não são mais necessárias
        window.renderizarProdutos = function() {};
        window.filtrarCategoria = function() {};

        // Sobrescrevemos as funções que precisam ler do HTML
        
        /**
         * Abre o modal com detalhes do produto
         * @param {HTMLElement} botao O botão "Ver" que foi clicado.
         */
        window.abrirDetalhes = function(botao) {
            const card = botao.closest(".produto-card");

            // Lê os dados direto do HTML (data-attributes)
            window.produtoAtual = {
                id: card.dataset.id,
                nome: card.dataset.nome,
                preco: parseFloat(card.dataset.preco),
                descricao: card.dataset.descricao,
                imagem: card.dataset.imagem,
                estoque: parseInt(card.dataset.estoque) || 0,
            };

            // Preencher dados do modal (o resto da função original funciona)
            document.getElementById("modal-nome").textContent = window.produtoAtual.nome;
            document.getElementById("modal-preco").textContent = formatarPreco(window.produtoAtual.preco);
            document.getElementById("modal-descricao").textContent = window.produtoAtual.descricao;
            document.getElementById("modal-img").src = window.produtoAtual.imagem;
            document.getElementById("modal-quantidade").value = 1;
            document.getElementById("modal-quantidade").max = window.produtoAtual.estoque;

            const estoqueDiv = document.getElementById("modal-estoque");
            if (window.produtoAtual.estoque > 0) {
                estoqueDiv.innerHTML = `<span class="em-estoque">Em estoque (${window.produtoAtual.estoque} disponível)</span>`;
            } else {
                estoqueDiv.innerHTML = `<span class="fora-estoque">Fora de estoque</span>`;
            }

            document.getElementById("modal-detalhes").style.display = "block";
        }

        /**
         * Adiciona produto ao carrinho (botão rápido)
         * @param {HTMLElement} botao O botão "Carrinho" que foi clicado.
         */
        window.adicionarRapido = function(botao) {
            const card = botao.closest(".produto-card");

            const produto = {
                id: card.dataset.id,
                nome: card.dataset.nome,
                preco: parseFloat(card.dataset.preco),
                imagem: card.dataset.imagem,
            };

            const itemExistente = window.carrinho.find((item) => item.id === produto.id);

            if (itemExistente) {
                itemExistente.quantidade += 1;
            } else {
                window.carrinho.push({
                    id: produto.id,
                    nome: produto.nome,
                    preco: produto.preco,
                    quantidade: 1,
                    imagem: produto.imagem,
                });
            }

            window.atualizarBadge();
        }

        // Remove o 'DOMContentLoaded' antigo que chamava renderizarProdutos()
        document.addEventListener("DOMContentLoaded", function () {
            // O 'renderizarProdutos()' não é mais necessário aqui.
            // O Blade/PHP já fez isso.
        });

    </script>
@endsection