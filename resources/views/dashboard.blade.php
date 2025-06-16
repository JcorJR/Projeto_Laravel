@extends('template')
@section('titulo', 'Dashboard')

@section('conteudo')

<div class="boas-vindas">
    <h1>Bem-vindo, {{ session('usuario_nome') }}</h1>
    <p>Acesse as funcionalidades abaixo:</p>
</div>

<div class="container">
    <div class="card">
        <img src="https://img.icons8.com/ios-filled/100/000000/user-group-man-man.png" alt="Usuários">
        <h3>Listar Usuários</h3>
        <p>Visualize todos os usuários cadastrados no sistema.</p>
        <a href="/usuarios"><button>Acessar</button></a>
    </div>

    <div class="card">
        <img src="https://img.icons8.com/ios-filled/100/000000/add-user-group-man-man.png" alt="Novo Usuário">
        <h3>Adicionar Usuário</h3>
        <p>Cadastre um novo usuário para o sistema DaZauto.</p>
        <a href="/frmusuario"><button>Adicionar</button></a>
    </div>

    <div class="card">
        <img src="https://img.icons8.com/ios-filled/100/000000/exit.png" alt="Sair">
        <h3>Sair</h3>
        <p>Encerre sua sessão com segurança.</p>
        <a href="/logout"><button>Sair</button></a>
    </div>
</div>

@endsection
