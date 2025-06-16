@extends('template')
@section('titulo','Edit usuario')
@section('conteudo')

<div class="contato">
    <div class="contain">
<form action="/atualizarusuario/{{$user->id}}" method="post">
    @csrf
    @method('put')
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome">

        <label for="email">Email</label>
        <input type="email" id="email" name="email">

        <label for="assunto">Assunto</label>
        <input type="text" id="assunto" name="assunto">

        <label for="mensagem">Mensagem</label>
        <textarea id="mensagem" name="mensagem"></textarea>

        <input type="submit" value="Atualizar">
        </form>
    </div>
</div>
@endsection