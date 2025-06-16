@extends('template')
@section('titulo','Produtos')

@section('conteudo')
    <div class = "container">
        @foreach($prods as $p)
        <div class="card">
            <img src="{{ asset('storage/' .$p['imagem']) }}" alt="">
            <h3>{{$p['nome']}}</h3> 
            <div class= "preco">R$ {{$p['preco']}}</div>
            <p>{{$p['quantidade']}}</p>   
        </div>
        @endforeach
    </div>
@endsection