@extends('layouts.main')

@section('titulo', 'Sobre Nós')

@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        h1{
            text-align: center;
            color: white;

        }
        p{
            color: rgba(255, 255, 255, 1);
            font-weight: bolder;

        }

        header, footer {
            background-color: #7A2E1D;
        }

        body {
            background-image: url(imagens/fundo.png);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        .linha {
            background: rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(15px);
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        main {
            width: 950px;
            margin: auto;
        }
    </style>
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="row border m-2 rounded linha shadow">
                <h1>SOBRE NÓS</h1>
                <p>
                    A Associação dos Artesãos de Caxias é uma iniciativa que tem como objetivo fortalecer, divulgar e
                    valorizar o trabalho dos artesãos da cidade de Caxias – MA.
                    O projeto foi criado para conectar os produtores locais com a comunidade e com novos públicos,
                    promovendo o artesanato como expressão cultural e fonte de renda.
                </p>
            </div>

            <div class="row border m-2 rounded linha">
                <h1>NOSSA HISTÓRIA</h1>
                <p>
                    A associação nasceu da união de artesãos e estudantes do curso de Análise e Desenvolvimento de
                    Sistemas da UniFacema, com o propósito de desenvolver uma plataforma digital que auxiliasse na
                    organização e divulgação das atividades artesanais.
                    Desde então, o grupo vem atuando para facilitar o cadastro, gerenciamento de produtos e
                    comunicação entre os membros da associação.
                </p>
            </div>

            <div class="row m-2 rounded linha">
                <h1>NOSSA EQUIPE</h1>
                <p>
                    Nossa equipe é formada por artesãos locais, voluntários e estudantes dedicados ao fortalecimento da
                    economia criativa de Caxias.
                    Cada integrante contribui com seu talento, seja na produção artística, no desenvolvimento tecnológico
                    ou na gestão do projeto.
                </p>
            </div>
        </div>
    </main>
@endsection
