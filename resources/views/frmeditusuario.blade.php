@extends('template')
@section('titulo','Editar Usuário')

@section('conteudo')
<div class="contato">
   
    <form action="/atualizarusuario/{{$user->id}}" method="post">
        @csrf
        @method('put')

        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" value="{{ $user->nome }}" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}" required>

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" placeholder="{{$user->senha}}">

        <input type="submit" value="Atualizar">
    </form>
</div>
@endsection
