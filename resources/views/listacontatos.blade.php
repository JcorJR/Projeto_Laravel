@extends('template')
@section('titulo', 'Lista de Contatos')

@section('conteudo')
    <h2>Lista de Contatos</h2>

    <div class="tabela-usuarios">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Assunto</th>
                    <th>Mensagem</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contatos as $c)
                <tr>
                    <td>{{ $c->nome }}</td>
                    <td>{{ $c->email }}</td>
                    <td>{{ $c->assunto }}</td>
                    <td>{{ $c->mensagem }}</td>
                    <td class="acoes">
                        <form action="/listacontatos" method="post" style="display: inline;">
                            @csrf
                            @method('delete')
                            <button class="btn-excluir">Excluir</button>
                        </form>

                        <a href="/responder/{{ $c->id }}" class="btn-add">Responder</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
