@extends('template')
@section('titulo', 'Usuários')

@section('conteudo')
<h2>Lista de Usuários</h2>

<div class="div-add">
    <a href="/frmusuario" class="btn-add">Adicionar Usuário</a>
</div>

<div class="tabela-usuarios">
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $u)
            <tr>
                <td>{{ $u->nome }}</td>
                <td>{{ $u->email }}</td>
                <td class="acoes">
                    <a href="{{ url('/frmeditusuario/' . $u->id) }}" class="btn-editar">Editar</a>
                    <form action="/excluirproduto/{{ $u->id }}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir este usuário?');">
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
