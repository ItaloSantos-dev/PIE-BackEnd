@extends('layouts.main')
@section('titulo', 'Detalhes do evento')

@section('style')
<link rel="stylesheet" href="{{asset('css/style-eventodetalhes.css')}}">
@endsection

@section('content')
<main class="container mt-4 mb-5 shadow border">
    <div class="row justify-content-center">
        <!-- Imagem -->
        <div class="col-12 col-md-5 text-center mb-4">
            <img class="img-fluid border rounded shadow-sm produto-img" src="{{ $evento->imagem }}" alt="{{ $evento->nome }}">
        </div>

        <!-- Informações -->
        <div class="col-12 col-md-5">
            <h2 class="fw-bold mb-2 text-center">{{ $evento->nome }}</h2>
            <div>
                <span class="badge bg-success spanhover mb-3 px-3 py-2">{{$evento->tipo_evento}}</span>
                <span class="badge bg-success spanhover mb-3 px-3 py-2">{{$evento->local}}</span>
                <span class="badge bg-success spanhover mb-3 px-3 py-2">{{$evento->status}}</span>
            </div>
            <div class="">
                <p>
                    Início: {{ \Carbon\Carbon::parse($evento->data_inicio)->format('d/m/Y \à\s H:i') }} 
                    <br>
                    Fim: {{ \Carbon\Carbon::parse($evento->data_fim)->format('d/m/Y \à\s H:i') }}
                </p>

            </div>
            <div>
                <p>Vagas disponíveis: <span class="badge bg-success spanhover">{{$evento->vagas_disponiveis}}</span></p> 
            </div>
            <div>
                <p>Instrutor: {{$evento->instrutor->nome}}</p> 
            </div>
            <div >
                @if($evento->isGratuito())
                    <p class="h4 text-success fw-bold textEvento">Gratuito</p>
                @else
                    <p  class="h4 textEvent fw-bold textEvento">R$ {{ number_format($evento->valor_inscricao, 2, ',', '.') }}</p>
                @endif
            </div>

           

            <p class="texto-descricao">{{ $evento->descricao }}</p>

            <form action="" method="post">
                @csrf
                <button class="btn btn-success w-100 py-2 mt-2 fw-bold ">
                    Inscrever-se
                </button>
            </form>
        </div>
    </div>
</main>
@endsection