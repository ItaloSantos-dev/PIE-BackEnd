<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Associação dos Artesãos de Caxias')</title>

    <!-- CSS principal -->
    <link rel="stylesheet" href="{{ asset('css/style-layout.css') }}">

    <!-- Ícones do Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos adicionais por página -->
    @yield('style')
</head>
<body id="top">

    <!-- Cabeçalho -->
    <header>
        <div class="logo">
            <a href="{{ route('paginainicial') }}">
                <img src="{{ asset('imagens/logo.png') }}" alt="Associação dos Artesãos de Caxias">
                <h1 style="color:white;">Associação dos Artesãos de Caxias</h1>
            </a>
        </div>

        <nav>
            <ul>
                <li><a href="{{ route('sobrenos') }}">Sobre</a></li>
                <li><a href="#artesaos">Artesãos</a></li>
                <li><a href="{{route('evento')}}">Eventos</a></li>
                <li><a href="{{ route('contato') }}">Contato</a></li>
                <li><a href="#associe" class="btn-cta">Associe-se</a></li>
            </ul>
        </nav>
    </header>

    <!-- Conteúdo principal -->
    <main class="p-2">
        @yield('content')
    </main>

    <!-- Rodapé -->
    <footer>
        <div class="footer-container text-center ">
            <div class="row">
                <div class="col">
                    <h3>Sobre Nós</h3>
                    <p>Promovemos o artesanato de Caxias, incentivando cultura, tradição e renda local.</p>
                    <div class="copyright">
                        &copy; 2025 Associação dos Artesãos de Caxias. <br> Todos os direitos reservados.
                    </div>
                </div>
                <div class="col">
                    <h3>Links</h3>
                    <a href="{{ route('sobrenos') }}">Sobre</a><br>
                    <a href="#artesaos">Artesãos</a><br>
                    <a href="{{route('evento')}}">Eventos</a><br>
                    <a href="{{ route('contato') }}">Contato</a>
                </div>
                <div class="col">
                    <h3 class="">Redes Sociais</h3>
                    <div class="socials d-flex align-items-center justify-content-center">
                        <a href="https://www.facebook.com/p/Associação-dos-Artesãos-de-Caxias-100076232955626/?_rdr" 
                        target="_blank" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i><span>Facebook</span>
                        </a>

                        <a href="https://www.instagram.com/artesaosdecaxias_ma" 
                        target="_blank" aria-label="Instagram">
                            <i class="fab fa-instagram"></i><span>Instagram</span>
                        </a>

                        <a href="https://wa.me/" 
                        target="_blank" aria-label="WhatsApp">
                            <i class="fab fa-whatsapp"></i><span>WhatsApp</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        
    </footer>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script de interatividade (Arthur) -->
    <script src="{{ asset('js/ui.js') }}"></script>


    <!-- Scripts específicos de cada página -->
    @yield('scripts')
</body>
</html>


