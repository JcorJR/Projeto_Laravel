@extends('template')
@section('titulo','Contato')

@section('conteudo')

    <div class="contato">
        <h1>Fale Conosco</h1>
        <form action="">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome">

            <label for="email">Email</label>
            <input type="email" id="email" name="email">

            <label for="assunto">Assunto</label>
            <input type="text" id="assunto" name="assunto">

            <label for="mensagem">Mensagem</label>
            <textarea id="mensagem" name="mensagem"></textarea>

            <input type="submit" value="Enviar">
        </form>
    </div>

@endsection
