@extends('template')
@section('titulo','Sobre')

@section('conteudo')
    <h1>Framework PHP</h1>
    <p>Laravel é um framework PHP livre e open-source criado por Taylor B. Otwell para o desenvolvimento de sistemas web que utilizam o padrão MVC (model, view, controller). Algumas características proeminentes do Laravel são sua sintaxe simples e concisa, um sistema modular com gerenciador de dependências dedicado, várias formas de acesso a banco de dados relacionais e vários utilitários indispensáveis no auxílio ao desenvolvimento e manutenção de sistemas.</p>
    <br>
    <h3>Requisitos do Laravel</h3>

    @if($frm == "(Laravel)")
        <ol>
            <li>PHP</li>
            <li>Composer</li>
        </ol>
    @else
        <p>Não há requisitos!</p>
    @endif
    <br>
    <h3>Características</h3>
    <ol>
        @foreach($vtg as $dados)
        <li>{{$dados}}</li>
        @endforeach
    </ol>
@endsection