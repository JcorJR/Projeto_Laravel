@extends('template')
@section('titulo','Add produto')

@section('conteudo')
<div class="contato">
    <div class="contain">
        <form action="/addproduto" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>

            <label for="preco">Preço</label>
            <input type="number" id="preco" name="preco" required step="0.01">

            <label for="quantidade">Quantidade</label>
            <input type="number" id="quantidade" name="quantidade" required>

            <label for="imagem">Imagem</label>
            <input type="file" id="imagem" name="imagem" accept="image/*" required>

            <input type="submit" value="Cadastrar">
        </form>
    </div>
</div>
@endsection
