@extends('template')
@section('titulo','Home')

@section('conteudo')

<div class="boas-vindas boas-vindas-banner">
    <h1>Bem-vindo à DazAuto Autopeças</h1>
    <p>Qualidade, confiança e performance para o seu veículo. Aqui você encontra as melhores peças com os melhores preços!</p>
</div>

<h2 style="margin-top: 60px; text-align: center;">Produtos em Destaque</h2>
<div class="container">
    @foreach($crd as $card)
        <div class="card">
            <img src="{{ asset('storage/' . $card->imagem) }}" alt="Imagem do produto" style="width: 100%; height: auto;">
            <h3>{{$card['nome']}}</h3>
            <p>{{$card['texto']}}</p>
            <a href="/produtos" class="btn-editar">Saiba mais</a>
        </div>
    @endforeach
</div>

@endsection
