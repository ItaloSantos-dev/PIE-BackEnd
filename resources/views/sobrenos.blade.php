
@extends('layouts.main')
@section('titulo', "Sobre")
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!--CSS basico-->
    <style>
        h1,p{
            text-align: center;
            color: white;
            
        }
        header, footer{
            background-color: #7A2E1D;
        }
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        body{
            background-image: url(/imagens/fundo.png);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            margin: 0px;
            padding: 0px;
        }
        .linha{
            background: rgba(255, 255, 255, 0.1);

            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);

            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        main{
            width: 950px;
            margin: auto;
        }
        
    </style>



</head>
<body>
    @section('content')
        <main>
            <div class="container">
                <div class="row border m-2 rounded linha shadow">
                    <h1 style="color:white;">SOBRE NÓS</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima unde alias incidunt harum voluptatibus porro sapiente, eveniet, recusandae molestias saepe voluptate quam. Fugiat animi aspernatur soluta, doloremque illo velit possimus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, magni dolorem dolorum eveniet animi at sit veniam quos sapiente illum earum possimus incidunt commodi quia ducimus quo itaque? Porro, saepe! Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit cumque asperiores, nam quaerat nisi assumenda placeat rem quibusdam unde veniam praesentium nulla enim facilis, delectus saepe eligendi minima distinctio quasi!</p>
                </div>

                <div class="row border m-2 rounded linha">
                    <h1 style="color:white;">NOSSA HISTÓRIA</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dolor rerum cumque delectus aliquam fuga voluptatem nisi maxime? Vel voluptate consequatur aperiam quae dolorem, saepe recusandae dignissimos. Nemo, molestiae optio! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque odio nam illo eum rerum? Doloremque aut sequi veniam, ex exercitationem debitis repellendus illum, harum consequuntur aspernatur veritatis velit odit nemo. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ipsum facilis eaque ipsam? Distinctio nobis aspernatur exercitationem sunt repellat culpa vel adipisci labore. Dolorum tenetur eos corrupti nisi quasi. Maxime!</p>
                </div>

                <div class="row  m-2 rounded linha">
                    <h1 style="color:white;">NOSSA EQUIPE</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dolor rerum cumque delectus aliquam fuga voluptatem nisi maxime? Vel voluptate consequatur aperiam quae dolorem, saepe recusandae dignissimos. Nemo, molestiae optio! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque odio nam illo eum rerum? Doloremque aut sequi veniam, ex exercitationem debitis repellendus illum, harum consequuntur aspernatur veritatis velit odit nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates perspiciatis qui pariatur ipsa provident aut officia, corporis rem veritatis exercitationem esse asperiores sequi praesentium fugit molestias! Explicabo dicta sit quaerat?</p>
                </div>

            </div>
        </main>
    @endsection
</body>
</html>


