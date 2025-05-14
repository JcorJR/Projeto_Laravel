@extends('template')
@section('titulo','home')

@section('conteudo')
<h1 style="text-align: center;">Produtos Laravel</h1>
    <div class="container">
        @foreach ($crd as $card)
            <div class="card">
                <img src="{{ $card['imagem'] }}" alt="{{ $card['nome'] }}">
                <h3>{{ $card['nome'] }}</h3>
                <p>{{ $card['texto'] }}</p>
                <div class="price">{{ $card['preco'] }}</div>
                <button>Saiba mais</button>
            </div>
        @endforeach
    </div>
@endsection
