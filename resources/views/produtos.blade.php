@extends('layouts.main')
@section('titulo', 'Produtos')
@section('style')
<link rel="stylesheet" href="{{asset('css/styles-produtos.css')}}">
@endsection
    
@section('content')

    <!-- CONTEÚDO PRINCIPAL -->
    <main class="main-content">
        <!-- BAR LATERAL -->
        <aside class="sidebar">
            <h3>Categorias</h3>
            <ul class="categoria-list">
                <li>
                    <a class="categoria-link ativo" onclick="filtrarCategoria(null)">
                        Todas as Categorias
                    </a>
                </li>
                <li>
                    <a class="categoria-link" onclick="filtrarCategoria('Cerâmica')">
                        Cerâmica
                    </a>
                </li>
                <li>
                    <a class="categoria-link" onclick="filtrarCategoria('Madeira')">
                        Madeira
                    </a>
                </li>
                <li>
                    <a class="categoria-link" onclick="filtrarCategoria('Têxtil')">
                        Têxtil
                    </a>
                </li>
                <li>
                    <a class="categoria-link" onclick="filtrarCategoria('Vidro')">
                        Vidro
                    </a>
                </li>
                <li>
                    <a class="categoria-link" onclick="filtrarCategoria('Metal')">
                        Metal
                    </a>
                </li>
            </ul>
        </aside>

        <!-- seleção de produtos -->
        <section class="produtos-section">
            <h2 id="titulo-produtos">Todos os Produtos</h2>
            <div class="produtos-grid" id="produtos-grid">
                <!-- produtos serão inseridos aqui via JavaScript -->
            </div>
        </section>
    </main>

    <!-- Modal Detalhes Do Produto -->
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

    <!-- modal carrinho -->
    <div id="modal-carrinho" class="modal">
        <div class="modal-content carrinho-modal-content">
            <span class="close" onclick="fecharCarrinho()">&times;</span>
            <h2>Meu Carrinho</h2>
            <div id="carrinho-conteudo">
                <!-- Itens do carrinho serão inseridos aqui -->
            </div>
        </div>
    </div>


    
@endsection


@section('scripts')
    <!-- Referência ao JavaScript externo -->
    <script src="{{asset('js/script-produtos.js')}}"></script>
@endsection