@extends('template')
@section('titulo', 'Usuários')

@section('conteudo')
<h2>Lista de Usuários</h2>

<table class="tabela-usuarios">
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $u)
        <tr>
            <td>{{ $u->nome }}</td>
            <td>{{ $u->email }}</td>
            <td>
                <a href="/frmeditusuario/{{ $u->id }}" class="btn-editar">Editar</a>
            </td>
            <td>
                <form action="/excluirusuario/{{ $u->id }}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir este usuário?');">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Excluir" class="btn-excluir">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
