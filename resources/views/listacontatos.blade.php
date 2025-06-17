@extends('template')
@section('titulo', 'Lista de Produtos')
@section('conteudo')
<h2>Lista de Produtos</h2>

<div class="div-add">
    <a href="/frmproduto" class="btn-add">Adicionar Produto</a>
</div>

<div class="tabela-usuarios">
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($liprods as $lp)
            <tr>
                <td>{{ $lp->nome }}</td>
                <td>{{ $lp->preco }}</td>
                <td>{{ $lp->quantidade }}</td>
                <td class="acoes"> 
                    <a href="{{ url('/frmeditproduto/' . $lp->id) }}" class="btn-editar">Editar</a>
                    <form action="{{ url('/excluirproduto/' . $lp->id) }}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir este produto?');">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn-excluir">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection