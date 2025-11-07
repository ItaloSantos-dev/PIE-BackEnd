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
        <div class="row">
            {{-- PASSO 1: Checar se a variável $eventos (que veio do Controller) está vazia --}}
            @if($eventos->isEmpty())
                <div class="col-12">
                    <p class="text-center text-muted fs-5">Nenhum evento futuro cadastrado no momento. Volte em breve!</p>
                </div>
            @else
                {{-- PASSO 2: Se não estiver vazia, faz um loop nela --}}
                @foreach($eventos as $evento)
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 d-flex gap-2">

                        <div class="card eventoCard shadow-sm rounded-3 w-100 d-flex flex-column h-100">
                            {{-- Opcional: Adicionar a imagem do evento --}}
                            @if($evento->imagem)
                                <img src="{{$evento->imagem}}" alt="{{$evento->nome}}" class="card-img-top p-3" style="height: 200px; object-fit: contain;">
                            @endif

                            <div class="card-body d-flex flex-column text-center">
                                {{-- PASSO 3: Trocar dados estáticos por dados dinâmicos --}}
                                <div class="nomeEvento">
                                    <p class="card-title fw-semibold ">{{$evento->nome}}</p>
                                </div>
                                <div class="statusEvento">
                                    <span class="badge bg-success">{{ $evento->status }}</span>
                                </div>
                                
                                <div class="precoEvento">
                                    {{-- Usando a função 'isGratuito()' do teu Model --}}
                                    <strong>
                                        @if($evento->isGratuito())
                                            Gratuito
                                        @else
                                            R$ {{ number_format($evento->valor_inscricao, 2, ',', '.') }}
                                        @endif
                                    </strong>
                                </div>
                            </div>

                            <div class="card-footer d-flex p-0">
                                <a href="{{route('eventos.show', $evento->id_evento)}}" class="btn btn-success btnDetalhes">Mais Detalhes</a>
                            </div>

                        </div>
                    </div>    




                @endforeach
            @endif

        </div>
    </div>
@endsection