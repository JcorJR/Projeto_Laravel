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
        <h3>Lista de Usuários</h3>
        <p>Visualize todos os usuários cadastrados no sistema ou adicione um novo.</p>
        <a href="/usuarios"><button>Acessar</button></a>
    </div>

    <div class="card">
        <img src="https://img.icons8.com/ios-filled/100/000000/clipboard.png" alt="Lista Produto">
        <h3>Lista de produtos</h3>
        <p>Vizualize o estoque ou cadastre um novo produto para o sistema DaZauto.</p>
        <a href="/listaprodutos"><button>Acessar</button></a>
    </div>

    <div class="card">
        <img src="https://static.vecteezy.com/system/resources/previews/040/460/630/non_2x/people-flat-style-icon-team-work-symbol-group-of-humans-sign-for-your-web-site-design-logo-app-ui-illustration-vector.jpg" alt="Sair">
        <h3>Lista de Contatos</h3>
        <p>Lista com todas as mensagens enviadas.</p>
        <a href="/listacontatos"><button>Acessar</button></a>
    </div>

    <div class="card">
        <img src="https://img.icons8.com/ios-filled/100/000000/exit.png" alt="Sair">
        <h3>Sair</h3>
        <p>Encerre sua sessão com segurança.</p>
        <a href="/logout"><button>Sair</button></a>
    </div>
</div>

@endsection
