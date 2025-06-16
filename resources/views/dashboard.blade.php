@extends('template')
@section('titulo','dashboard')

@section('conteudo')
<div>
    <h2>Bem-vindo(a), {{ session('usuario_nome') }}</h2>
</div>
@endsection