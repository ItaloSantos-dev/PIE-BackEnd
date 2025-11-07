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
{{-- O teu JS original só tem a função de 'alternarDetalhesEvento', o que é perfeito. --}}
<script src="{{asset('js/script-eventos.js')}}"></script>
@endsection

@section('content')
    <div class="container py-4">
        <div class="row"><h1>Eventos</h1></div>
        <div class="row" id="lista-eventos">

            {{-- PASSO 1: Checar se a variável $eventos (que veio do Controller) está vazia --}}
            @if($eventos->isEmpty())
                <div class="col-12">
                    <p class="text-center text-muted fs-5">Nenhum evento futuro cadastrado no momento. Volte em breve!</p>
                </div>
            @else
                {{-- PASSO 2: Se não estiver vazia, faz um loop nela --}}
                @foreach($eventos as $evento)
                {{-- O HTML abaixo vai se repetir para cada evento encontrado --}}
                <div class="col-12 col-sm-6 col-lg-4 col-xxl-3 mb-4">
                    <div class="card shadow-sm h-100">
                        
                        {{-- Opcional: Adicionar a imagem do evento --}}
                        @if($evento->imagem)
                            <img src="{{ asset('storage/imagens_eventos/' . $evento->imagem) }}" class="card-img-top" alt="{{ $evento->nome }}" style="height: 200px; object-fit: cover;">
                        @endif

                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                {{-- PASSO 3: Trocar dados estáticos por dados dinâmicos --}}
                                <h5 class="card-title mb-0">{{ $evento->nome }}</h5>
                                <span class="badge bg-primary">{{ $evento->status }}</span>
                            </div>
                            
                            <p class="card-text text-muted mb-2">{{ $evento->descricao }}</p>

                            <div class="d-flex justify-content-between align-items-center mb-2 mt-auto pt-2">
                                <span class="text-secondary">Valor da inscrição:</span>
                                
                                {{-- Usando a função 'isGratuito()' do teu Model --}}
                                <strong>
                                    @if($evento->isGratuito())
                                        Gratuito
                                    @else
                                        R$ {{ number_format($evento->valor_inscricao, 2, ',', '.') }}
                                    @endif
                                </strong>
                            </div>

                            {{-- PASSO 4: IDs e OnClicks precisam ser únicos para cada card --}}
                            <button class="btn btn-outline-primary w-100 mb-3" type="button" onclick="alternarDetalhesEvento('detalhesEvento-{{ $evento->id_evento }}')">
                                Mais detalhes
                            </button>

                            <div class="collapse" id="detalhesEvento-{{ $evento->id_evento }}">
                                <ul class="list-group list-group-flush mb-3">
                                    <li class="list-group-item px-0 d-flex justify-content-between">
                                        <span class="text-secondary">Tipo</span>
                                        <strong>{{ $evento->tipo_evento }}</strong>
                                    </li>
                                    <li class="list-group-item px-0 d-flex justify-content-between">
                                        <span class="text-secondary">Local</span>
                                        <strong>{{ $evento->local }}</strong>
                                    </li>
                                    <li class="list-group-item px-0 d-flex justify-content-between">
                                        <span class="text-secondary">Início</span>
                                        {{-- Usando o Cast 'datetime' do teu Model --}}
                                        <strong>{{ $evento->data_inicio->format('d/m/Y H:i') }}</strong>
                                    </li>
                                    <li class="list-group-item px-0 d-flex justify-content-between">
                                        <span class="text-secondary">Fim</span>
                                        <strong>{{ $evento->data_fim->format('d/m/Y H:i') }}</strong>
                                    </li>
                                </ul>

                                <div class="row g-3 align-items-center mb-3">
                                    <div class="col-12 col-md-6">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2 text-secondary">Vagas:</span>
                                            <span class="badge bg-primary">{{ $evento->vagas_disponiveis }}</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 text-md-end">
                                        <span class="text-secondary me-2">Status:</span>
                                        <span class="badge bg-success">{{ $evento->status }}</span>
                                    </div>
                                </div>

                                <div class="d-grid d-sm-flex gap-2">
                                    {{-- Usando a função 'isLotado()' do teu Model --}}
                                    <button id="btnInscrever{{ $evento->id_evento }}" type="button" class="btn btn-primary" {{ $evento->isLotado() ? 'disabled' : '' }}>
                                        {{ $evento->isLotado() ? 'Esgotado' : 'Inscrever-se' }}
                                    </button>
                                    <button id="btnDetalhes{{ $evento->id_evento }}" type="button" class="btn btn-outline-secondary">
                                        Ver detalhes
                                    </button>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
                @endforeach {{-- Fim do loop --}}
            @endif {{-- Fim do @if --}}
        </div>
    </div>
@endsection