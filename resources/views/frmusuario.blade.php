@extends('template')
@section('titulo', 'Adicionar Usuário')

@section('conteudo')
<div class="contato">
    <h2 style="margin-bottom: 20px; color: black; text-align: center;">Cadastro de Usuário</h2>

    <form action="/addusuario" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="fnome">Nome</label>
        <input type="text" id="fnome" name="fnome" required>

        <label for="femail">E-mail</label>
        <input type="email" id="femail" name="femail" required>

        <label for="fsenha">Senha</label>
        <input type="password" id="fsenha" name="fsenha" required>

        <input type="submit" value="Cadastrar">
    </form>
</div>
@endsection
