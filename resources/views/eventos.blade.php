@extends('layouts.main')
@section('titulo', 'Eventos')

@section('style')
<link rel="stylesheet" href="{{asset('css/style-eventos.css')}}">
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous">
</script>
<script src="{{asset('js/script-eventos.js')}}"></script>
@endsection

@section('content')
    <div class="container py-4">
        <div class="row"><h1>Eventos</h1></div>
        <div class="row" id="lista-eventos">
            <!-- CARD ÚNICO (ID EXCLUSIVO: evento1) -->
            <div class="col-12 col-sm-6 col-lg-4 col-xxl-3 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h5 class="card-title mb-0">Nome do Evento</h5>
                            <span class="badge bg-primary d-none">Ativo</span>
                        </div>
                        <p  class="card-text text-muted mb-2">Descrição breve do evento, com informações principais e objetivos.</p>

                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="text-secondary">Valor da inscrição:</span>
                            <strong>R$ 100,00</strong>
                        </div>

                        <button id="btnDetalhes" class="btn btn-outline-primary w-100 mb-3" type="button" onclick="alternarDetalhesEvento('detalhesEvento')">
                            Mais detalhes
                        </button>

                        <div class="collapse" id="detalhesEvento">
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item px-0 d-flex justify-content-between">
                                    <span class="text-secondary">Tipo</span>
                                    <strong id="tipoEvento1">Seminário</strong>
                                </li>
                                <li class="list-group-item px-0 d-flex justify-content-between">
                                    <span class="text-secondary">Local</span>
                                    <strong id="localEvento1">Auditório Principal</strong>
                                </li>
                                <li class="list-group-item px-0 d-flex justify-content-between">
                                    <span class="text-secondary">Início</span>
                                    <strong id="dataInicio1">10/12/2025 09:00</strong>
                                </li>
                                <li class="list-group-item px-0 d-flex justify-content-between">
                                    <span class="text-secondary">Fim</span>
                                    <strong id="dataFim1">10/12/2025 17:00</strong>
                                </li>
                            </ul>

                            <div class="row g-3 align-items-center mb-3">
                                <div class="col-12 col-md-6">
                                    <div class="d-flex align-items-center">
                                        <span class="me-2 text-secondary">Vagas disponíveis:</span>
                                        <span id="vagasDisponiveis1" class="badge bg-primary">25</span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 text-md-end">
                                    <span class="text-secondary me-2">Status:</span>
                                    <span class="badge bg-success">Ativo</span>
                                </div>
                            </div>

                            <div class="d-grid d-sm-flex gap-2">
                                <button id="btnInscrever1" type="button" class="btn btn-primary">
                                    Inscrever-se
                                </button>
                                <button id="btnDetalhes1" type="button" class="btn btn-outline-secondary">
                                    Ver detalhes
                                </button>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



