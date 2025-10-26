@extends('layouts.main')
@section('titulo', 'Pagina incial')
<link rel="stylesheet" href="{{asset('/css/style-paginainicial.css')}}">
@section('content')
        <main class="p-0">
        <!-- Primeira seção -->
        <section class="hero-section py-5">
            <div class="container">
                <div class="row align-items-center min-vh-100">
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <h1 class="hero-title display-3 fw-light mb-4">
                                <span class="d-block">Arte em</span>
                                <span class="d-block fw-bold">Cada Detalhe</span>
                            </h1>
                            <p class="hero-subtitle lead mb-">Peças únicas criadas por artesãos que transformam matéria-prima em histórias.</p>
                            <div class="hero-actions">
                                <a href="#colecoes" class="btn btn-marrom btn-lg me-3">Explorar Coleções</a>
                                <a href="#sobre" class="btn btn-marrom btn-lg">Conhecer o Ateliê</a>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                </div>
            </div>
        </section>




        <!-- Seção Quem Somos -->
        <section id="sobre" class="quem-somos py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="position-relative">
                            <img style="height: 700px;" src="/imagens/paginainicial/arteson.png" 
                                 alt="Nosso ateliê" class="img-fluid rounded shadow">
                            <div class="quem-somos-badge position-absolute bottom-0 end-0 m-4 p-3">
                                <h4 class="mb-1">+ de 50</h4>
                                <p class="mb-0">artesãos representados</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-5">
                        <h2 class="section-title display-5 fw-light">Quem Somos</h2>
                        <p class="mb-4">Nosso ateliê é dedicado à celebração do trabalho manual e à valorização dos processos artesanais autênticos. Acreditamos que cada peça carrega a energia e a história de quem a criou.</p>
                        
                        <div class="mb-4">
                            <div class="valor-item d-flex mb-3">
                                <div class="valor-icon me-3">
                                    <i class="fas fa-hands"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Feito à Mão</h5>
                                    <p class="mb-0">Cada peça é única, criada com técnicas tradicionais</p>
                                </div>
                            </div>
                            
                            <div class="valor-item d-flex mb-3">
                                <div class="valor-icon me-3">
                                    <i class="fas fa-leaf"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Materiais Naturais</h5>
                                    <p class="mb-0">Priorizamos materiais sustentáveis e de origem responsável</p>
                                </div>
                            </div>
                            
                            <div class="valor-item d-flex">
                                <div class="valor-icon me-3">
                                    <i class="fas fa-history"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Tradição e Inovação</h5>
                                    <p class="mb-0">Unimos saberes ancestrais com designs contemporâneos</p>
                                </div>
                            </div>
                        </div>
                        
                        <a href="#" class="btn btn-outline-marrom btn-lg">Nossa História</a>
                    </div>
                </div>
            </div>
        </section>




        <!-- Seção de Lançamentos -->
        <section id="lancamentos" class="py-5 bg-white">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12">
                        <h2 class="section-title display-5 fw-light">Lançamentos</h2>
                        <p class="section-subtitle">Novas peças exclusivas para sua coleção</p>
                    </div>
                </div>
                
                <div class="row g-4">




                    <!-- Produto 1 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="produto-card p-3">
                            <div class="position-relative mb-3">
                                <img src="/imagens/paginainicial/artesao1.png" 
                                     class="img-fluid" alt="Orixá Espelhado">
                                <span class="badge-lancamento position-absolute top-0 end-0 m-2 p-2">Novo</span>
                            </div>
                            <h5 class="mb-2">(ITEM)</h5>
                            <p class="text-muted small mb-2">(ESPECIFICAÇÃO)</p>
                            <div class="preco-info">
                                <p class="preco h5 mb-1">(R$ PREÇO)</p>
                                <p class="parcelamento mb-3">(PARCELAS)</p>
                            </div>
                            <a href="#" class="btn btn-marrom w-100">Ver Detalhes</a>
                        </div>
                    </div>



                    
                    <!-- Produto 2 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="produto-card p-3">
                            <div class="position-relative mb-3">
                                <img src="/imagens/paginainicial/artesao1.png" 
                                     class="img-fluid" alt="Orixá e Xangô">
                                <span class="badge-lancamento position-absolute top-0 end-0 m-2 p-2">Novo</span>
                            </div>
                            <h5 class="mb-2">(ITEM)</h5>
                            <p class="text-muted small mb-2">(ESPECIFICAÇÃO)</p>
                            <div class="preco-info">
                                <p class="preco h5 mb-1">(R$ PREÇO)</p>
                                <p class="parcelamento mb-3">(PARCELAS)</p>
                            </div>
                            <a href="#" class="btn btn-marrom w-100">Ver Detalhes</a>
                        </div>
                    </div>
                    




                    <!-- Produto 3 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="produto-card p-3">
                            <div class="position-relative mb-3">
                                <img src="/imagens/paginainicial/artesao1.png" 
                                     class="img-fluid" alt="Iemanjá Espelhado">
                                <span class="badge-lancamento position-absolute top-0 end-0 m-2 p-2">Novo</span>
                            </div>
                            <h5 class="mb-2">(ITEM)</h5>
                            <p class="text-muted small mb-2">(ESPECIFICAÇÃO)</p>
                            <div class="preco-info">
                                <p class="preco h5 mb-1">(R$ PREÇO)</p>
                                <p class="parcelamento mb-3">(PARCELAS)</p>
                            </div>
                            <a href="#" class="btn btn-marrom w-100">Ver Detalhes</a>
                        </div>
                    </div>
                    



                    <!-- Produto 4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="produto-card p-3">
                            <div class="position-relative mb-3">
                                <img src="/imagens/paginainicial/artesao1.png" 
                                     class="img-fluid" alt="Iemanjá e Xangô">
                                <span class="badge-lancamento position-absolute top-0 end-0 m-2 p-2">Novo</span>
                            </div>
                            <h5 class="mb-2">(ITEM)</h5>
                            <p class="text-muted small mb-2">(ESPECIFICAÇÃO)</p>
                            <div class="preco-info">
                                <p class="preco h5 mb-1">(R$ PREÇO)</p>
                                <p class="parcelamento mb-3">(PARCELAS)</p>
                            </div>
                            <a href="#" class="btn btn-marrom w-100">Ver Detalhes</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- Seção de Coleções -->
        <section id="colecoes" class="py-5 bg-light">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12">
                        <h2 class="section-title display-5 fw-light">Coleções</h2>
                        <p class="section-subtitle">Nossas linhas exclusivas de peças artesanais</p>
                    </div>
                </div>
                




                <div class="row g-4">
                    <!-- Coleção 1 -->
                    <div class="col-md-4">
                        <div class="collection-card">
                            <img src="/imagens/paginainicial/interrogacao.png" 
                                 alt="Coleção1">
                            <div class="collection-overlay">
                                <div>
                                    <h3 class="text-white mb-2">(COLEÇAO)</h3>
                                    <p class="text-white-50 mb-3">...</p>
                                    <a href="#" class="btn btn-outline-light btn-sm">Explorar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    


                    <!-- Coleção 2 -->
                    <div class="col-md-4">
                        <div class="collection-card">
                            <img src="/imagens/paginainicial/interrogacao.png" 
                                 alt="Coleção Tecidos">
                            <div class="collection-overlay">
                                <div>
                                    <h3 class="text-white mb-2">(COLEÇÃO)</h3>
                                    <p class="text-white-50 mb-3">...</p>
                                    <a href="#" class="btn btn-outline-light btn-sm">Explorar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    


                    <!-- Coleção 3 -->
                    <div class="col-md-4">
                        <div class="collection-card">
                            <img src="/imagens/paginainicial/interrogacao.png" 
                                 alt="Coleção Madeira">
                            <div class="collection-overlay">
                                <div>
                                    <h3 class="text-white mb-2">(COLEÇAO)</h3>
                                    <p class="text-white-50 mb-3">...</p>
                                    <a href="#" class="btn btn-outline-light btn-sm">Explorar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- Seção Newsletter -->
        <section class="newsletter py-5">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <h3 class="fw-bold mb-3">Junte-se à Nossa Comunidade</h3>
                        <p class="mb-4">Receba novidades sobre lançamentos, histórias de artesãos e eventos exclusivos.</p>
                        <form class="d-flex gap-2">
                            <input type="email" class="form-control" placeholder="Seu melhor e-mail">
                            <button type="submit" class="btn px-4">Assinar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection