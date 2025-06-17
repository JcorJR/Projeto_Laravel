@extends('template')
@section('titulo','Contato')

@section('conteudo')

    <div class="contato">
        <h1>Fale Conosco</h1>
        <form action="/addcontato" method="POST">
            @csrf
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="assunto">Assunto</label>
            <input type="text" id="assunto" name="assunto" required>

            <label for="mensagem">Mensagem</label>
            <textarea id="mensagem" name="mensagem" required></textarea>

            <input type="submit" value="Enviar">
        </form>
    </div>

@endsection
