@extends('template')
@section('titulo', 'Dashboard')

@section('conteudo')

<header>
    <div class="dash-itens">
        <a href="/dashboard">Início</a>
        <a href="/usuarios">Usuários</a>
        <a href="/frmusuario">Adicionar Usuário</a>
        <a href="/logout">Sair</a>
    </div>
</header>

<div class="boas-vindas" style="text-align: center; margin: 40px auto;">
    <h1 style="color: black;">Bem-vindo, {{ session('usuario_nome') }}</h1>
    <p style="color: #555;">Acesse as funcionalidades abaixo:</p>
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
