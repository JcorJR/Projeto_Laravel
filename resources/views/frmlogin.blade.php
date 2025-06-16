@extends('template')
@section('titulo','Login')

@section('conteudo')
<div class="contato">
    <div class="contain">    
        <div>
        <h2>Área Restrita</h2>
        <form action="/logar" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" required>

            <input type="submit" value="Entrar" class="form-button">
        </form>
        </div>
    </div>
</div>
@endsection