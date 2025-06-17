@extends('template')
@section('titulo','Lista de Contatos')

@section('conteudo')
    <div class = "container">
        @foreach($prods as $p)
        <div class="card">
          <img src="{{ asset('storage/' . $p->imagem) }}" alt="Imagem do produto" style="width: 100%; height: auto;">
            <h3>{{$p['nome']}}</h3> 
            <div class= "preco">R$ {{$p['preco']}}</div>
            <p>{{$p['quantidade']}} Diponíveis</p>   
        </div>
        @endforeach
    </div>
@endsection