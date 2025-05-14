@extends('template')
@section('titulo','Produtos')

@section('conteudo')
    @foreach($prods as $p)
    <div>
        <h3>{{$p['nome']}}</h3>
        <p>R$ {{$p['preco']}}</p>
        <p>{{$p['quantidade']}} disponíveis</p>
    </div>
    @endforeach
@endsection