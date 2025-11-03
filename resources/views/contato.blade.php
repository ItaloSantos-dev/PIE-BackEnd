@extends('layouts.main')

@section('titulo', 'Contato')

@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <style>
        h1, p {
            text-align: center;
            color: white;
        }

        body {
            background-image: url(imagens/banquin.png);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }

        .borrar {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .animacao {
            transition: transform 0.3s ease;
        }

        .animacao:hover {
            transform: scale(1.1);
            transition-duration: 0.3s;
        }

        header, footer {
            background-color: #7A2E1D;
        }

        #formulario {
            min-height: 61.7vh;
        }
    </style>
@endsection

@section('content')
    <main>
        <div class="container text-center">
            <!-- Contatos rápidos -->
            <div class="row m-2">
                <div class="col borrar p-3">
                    <h1>Contato Imediato</h1>
                    <a class="bi bi-instagram animacao btn btn-secondary m-1"
                       href="https://www.instagram.com/artesaosdecaxias_ma"
                       target="_blank" title="Instagram"></a>

                    <a class="bi bi-telephone animacao btn btn-secondary m-1"
                       href="tel:+5599999999999" title="Telefone"></a>

                    <a class="bi bi-envelope animacao btn btn-secondary m-1"
                       href="mailto:artesaosdecaxiasma@gmail.com" title="E-mail"></a>
                </div>
            </div>

            <!-- Descrição -->
            <div class="row m-2">
                <div class="col borrar p-3">
                    <h1>Venha nos fazer uma visita</h1>
                    <p>Preencha o formulário abaixo para entrar em contato ou agendar uma visita conosco.</p>
                </div>
            </div>

            <!-- Formulário -->
            <div id="formulario" class="row m-2">
                <div class="borrar p-3">
                    <h1>Formulário de Contato</h1>
                    <form action="#" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="nome" class="form-label text-white">Nome</label>
                            <input type="text" id="nome" class="form-control" placeholder="Digite seu nome completo">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label text-white">E-mail</label>
                            <input type="email" id="email" class="form-control" placeholder="Digite seu e-mail">
                        </div>
                        <div class="mb-3">
                            <label for="mensagem" class="form-label text-white">Mensagem</label>
                            <textarea id="mensagem" class="form-control" rows="4" placeholder="Escreva sua mensagem..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
