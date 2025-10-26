@extends('layouts.main')
@section('titulo', 'Contato')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <style>
        h1, p{
            text-align: center;
            color: white;
        }
        body{
            background-image: url(/imagens/banquin.png);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            margin: 0px;
            padding: 0px;
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

        .borrar{
            background: rgba(255, 255, 255, 0.1);

            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);

            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .animacao{
            transition:transform .3s  ease;
        }
        .animacao:hover{
            transform: scale(1.1);
            transition-duration: .3s ;
        }
        #div1{
            text-align: center;
        }
        header, footer{
            background-color: #7A2E1D;
        }
        #formulario{
            min-height: 61.7vh;
        }
        

    </style>
</head>
<body class="pb-5">
    @section('content')
    <main>
        <div class="container  text-center">
            <div class="row m-2 ">
                <div class="col borrar p-1">
                    <h1 style="color:white;">Contato imediato</h1>
                    <a class="bi animacao bi-instagram btn btn-secondary" href="https://www.instagram.com/artesaosdecaxias_ma?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"></a>

                    <a class="bi animacao bi-telephone btn btn-secondary" href="" target="_blank"></a>

                    <a class="bi animacao bi-envelope btn btn-secondary" href="https://www.instagram.com/artesaosdecaxias_ma?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"></a>
                </div>
            </div>

            <div class="row m-2">
                <div class="col borrar">
                    <h1 style="color:white;">Venha-nos fazer uma visita</h1>
                    <p>Preencha o formulario abaixo para que possamos marcar a sua visita</p>
                </div>
            </div>

            <div id="formulario" class="row m-2">
                <div class="borrar p-1">
                    <h1 style="color:white;">Formulário para contato</h1>
                    
                </div>
            </div>
        </div>
       
    </main>
    @endsection
</body>
</html>

