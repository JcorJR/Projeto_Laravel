@extends('template')
@section('titulo', 'Responder Contato')

@section('conteudo')
<div class="contato"> 
    <h2>Responder Contato</h2>

    
        <form action="/listacontatos" >
            @csrf

            <label for="nome">Nome:</label>
            <input type="text" id="nome" value="{{ $contato->nome }}" disabled>

            <label for="email">E-mail:</label>
            <input type="email" id="email" value="{{ $contato->email }}" disabled>

            <label for="mensagem_original">Mensagem Original:</label>
            <textarea id="mensagem_original" rows="4" disabled>{{ $contato->mensagem }}</textarea>

            <label for="resposta">Sua Resposta:</label>
            <textarea id="resposta" name="resposta" rows="4" required placeholder="Digite sua resposta..."></textarea>

            <button type="submit" class="btn-add">Enviar Resposta</button>
        </form>
</div>
@endsection
