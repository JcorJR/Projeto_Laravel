@extends('template')
@section('titulo','contatos')

@section('conteudo')

    <div class = "contato">
        <h1>Fale Conosco</h1>
        <form action="">
            <label for="">Nome</label>
            <input type="text">
            <label for="">Email</label>
            <input type="text">
            <label for="">Assunto</label>
            <input type="text">
            <label for="">Mensagem</label>
            <input type="text">
            <input type="submit">
        </form>
    </div>

@endsection