@extends('template')
@section('titulo','Editar Produto')

@section('conteudo')
<div class="contato">

    <form action="/atualizarproduto/{{ $prod->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" value="{{ $prod->nome }}" required>

        <label for="preco">Preço</label>
        <input type="number" id="preco" name="preco" value="{{ $prod->preco }}" required>

        <label for="quantidade">Quantidade</label>
        <input type="number" id="quantidade" name="quantidade" value="{{ $prod->quantidade }}" required>

        <label for="imagem">Imagem</label>
        <input type="file" id="imagem" name="imagem" accept="image/*">

        @if($prod->imagem)
            <div style="margin-top: 10px;">
                <strong>Imagem atual:</strong><br>
                <img src="{{ asset('storage/' . $prod->imagem) }}" alt="Imagem atual" style="max-width: 200px;">
            </div>
        @endif

        <input type="submit" value="Atualizar">
    </form>
</div>
@endsection

