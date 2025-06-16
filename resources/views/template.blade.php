<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <header>
        <div>
            <h1>DazAuto</h1>
        </div>
        <div>
            <a href="/">Home</a>
            <a href="/sobre">Sobre</a>
            <a href="/produtos">Produtos</a>
            <a href="/contatos">Contato</a>          
            @if(session()->has('usuario_id'))
            <div class="dropdown">
                <a href="#" class="btn-entrar">Conta ▼</a>
                <div class="dropdown-content">
                    <a href="/dashboard">Dashboard</a>
                    <a href="/usuarios">Usuários</a>
                    <a href="/frmproduto">Cadastrar Produto</a> 
                    <a href="/logout">Sair</a>
                </div>
            </div>
            @else
            <a href="/frmlogin" class="btn-entrar">Entrar</a>
            @endif
        </div>
        
    </header>
    <main>
        @yield('conteudo')
    </main>
</body>
</html>
