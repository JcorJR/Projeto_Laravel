@extends('template')
@section('titulo','home')

@section('conteudo')

    <div class = "container">
        @foreach($crd as $card)
        <div class="card">
            <img src="{{$card['imagem']}}" alt="Produtos">
            <h3>{{$card['nome']}}</h3>
            <p>{{$card['texto']}}</p>
            <div class= "preco">{{$card['preco']}}</div>
            <button>Saiba mais</button>    
        </div>
        @endforeach
    </div>

@endsection