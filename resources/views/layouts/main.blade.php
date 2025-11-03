<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{asset('css/style-layout.css')}}">
    <!-- Ícones do Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    @yield('style')
</head>
<body id="top">

    <!-- Cabeçalho -->
    <header>
        <div class="logo">
            <a href="/paginainicial">
                <img src="/imagens/logo.png" alt="Associação dos Artesãos de Caxias">
                <h1 style="color:white;" id="textheader">Associação dos Artesãos de Caxias</h1>
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="{{route('sobrenos')}}">Sobre</a></li>
                <li><a href="#artesaos">Artesãos</a></li>
                <li><a href="#">Eventos</a></li>
                <li><a href="{{route('contato')}}">Contato</a></li>
                <li><a href="#associe" class="btn-cta">Associe-se</a></li>
            </ul>
        </nav>
    </header>

    <!-- Conteúdo principal -->
    @yield('content')

    <!-- Rodapé -->
    <footer>
        <div class="footer-container">
            <div>
                <h3>Sobre Nós</h3>
                <p>Promovemos o artesanato de Caxias, incentivando cultura, tradição e renda local.</p>
            </div>
            <div>
                <h3>Links</h3>
                <a href="{{route('sobrenos')}}">Sobre</a><br>
                <a href="#artesaos">Artesãos</a><br>
                <a href="#eventos">Eventos</a><br>
                <a href="{{route('contato')}}">Contato</a>
            </div>
            <div>
                <h3>Redes Sociais</h3>
                <div class="socials">
                    <a  href="https://www.facebook.com/p/Associação-dos-Artesãos-de-Caxias-100076232955626/?_rdr" target="_blank" aria-label="Facebook"><i style="color:white;" class="fab fa-facebook-f"></i><span>Facebook</span></a>
                    <a  href="https://www.instagram.com/artesaosdecaxias_ma" target="_blank" aria-label="Instagram"><i style="color:white;" class="fab fa-instagram"></i ><span>Instagram</span></a>
                    <a  href="https://wa.me/" target="_blank" aria-label="WhatsApp"><i style="color:white;" class="fab fa-whatsapp"></i><span>WhatsApp</span></a>
                </div>
            </div>
        </div>
        <div class="copyright">
            &copy; 2025 Associação de Artesãos de Caxias. Todos os direitos reservados.
        </div>
    </footer>

</body>
</html>
