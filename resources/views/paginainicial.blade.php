@extends('layouts.main')

@section('titulo', 'Página Inicial')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/style-paginainicial.css') }}">
@endsection

@section('content')
    <section id="inicio" class="destaque">
        <div class="container destaque-interno">
            <div class="destaque-texto">
                <h1>Associação dos Artesãos de Caxias</h1>
                <p>
                    Um projeto dos alunos de ADS feito pra ajudar os artesãos de Caxias a divulgar seus produtos e
                    organizar suas atividades de um jeito simples e prático.
                </p>
               

                {{-- Carrossel de imagens --}}
                <div id="site-carousel" style="max-width: 1000px; margin: 25px auto; border-radius: 12px; overflow: hidden;">
                <img src="{{ asset('imagens\paginainicial\artesao.png') }}" alt="Artesãos de Caxias">
                <img src="{{ asset('imagens\paginainicial\Produtos Artesanais.jpg') }}" alt="Produtos artesanais">
                <img src="{{ asset('imagens\paginainicial\Feira de artesanatos.jpg') }}" alt="Feira de artesanato">
                <img src="{{ asset('imagens\paginainicial\Oficina de artesao.jpg') }}" alt="Oficina de artesãos">
                <img src="{{ asset('imagens\paginainicial\Exposiçao de  arte local.jpg') }}" alt="Exposição de arte local">
                </div>


                <p class="linha-de-acoes">
                    <a class="botao botao-primario" href="#funcoes">Ver recursos</a>
                    <a class="botao" href="#sobre">Saber mais</a>
                </p>
            </div>

            <div class="destaque-midia" aria-hidden="true">
                <div class="espaco-midia"></div>
            </div>
        </div>
    </section>

    <main class="container grade-principal">
        <section class="conteudo" id="funcoes">
            <h2>O que o sistema faz</h2>
            <p>
                O sistema ajuda a unir e fortalecer os artesãos da cidade, oferecendo ferramentas que facilitam a
                divulgação, o cadastro e a organização das atividades.
            </p>

            <div class="grade-de-cards">
                <article class="card">
                    <h3>Gerenciar Produtos</h3>
                    <p>
                        Cadastre seus produtos, atualize informações ou remova o que não quiser mais mostrar.
                        Dá pra colocar fotos, preços e descrições.
                    </p>
                </article>

                <article class="card">
                    <h3>Cadastro de Artesãos</h3>
                    <p>Crie e atualize seu perfil completo para que o conheçam e saibam como te encontrar.</p>
                </article>

                <article class="card">
                    <h3>Eventos e Notícias</h3>
                    <p>
                        Publique novidades e eventos da associação pra todo mundo ficar por dentro do que tá rolando.
                    </p>
                </article>
            </div>
        </section>

        <aside class="barra-lateral">
            <div class="painel">
                <h4>Atalhos</h4>
                <ul class="links-rapidos">
                    <li><a href="#cadastro">Novo Cadastro</a></li>
                    <li><a href="#funcoes">Funcionalidades</a></li>
                    <li><a href="#contato">Fale Conosco</a></li>
                </ul>
            </div>

            <div class="painel">
                <h4>Informações</h4>
                <p>
                    O site faz parte de um projeto acadêmico voltado para apoiar o trabalho artesanal local e
                    promover a economia criativa em Caxias.
                </p>
            </div>
        </aside>
    </main>
@endsection
