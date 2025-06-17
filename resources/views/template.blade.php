<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/responsivel.css') }}">
</head>
<body>
    <header>
        <div>
            <h1>DazAuto</h1>
        </div>

        <div class="menu-toggle" id="menu-toggle">☰</div>

        <div class="nav-links" id="nav-links">
            <a href="/">Home</a>
            <a href="/sobre">Sobre</a>
            <a href="/produtos">Produtos</a>
            <a href="/contatos">Contato</a>

            @if(session()->has('usuario_id'))
            <div class="dropdown">
             <a href="#" class="btn-entrar dropdown-toggle" id="btn-conta">Conta ▼</a>
                <div class="dropdown-content" id="dropdown-menu">
                    <a href="/dashboard">Dashboard</a>
                    <a href="/usuarios">Usuários</a>
                    <a href="/listaprodutos">Produtos</a>
                    <a href="/listacontatos">Contatos</a>
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

    <script>
        
      const toggle = document.getElementById('menu-toggle');
    const nav = document.getElementById('nav-links');

    toggle.addEventListener('click', () => {
        nav.classList.toggle('show');
    });

    // Dropdown touch support
    const contaBtn = document.getElementById('btn-conta');
    const dropdownMenu = document.getElementById('dropdown-menu');

    let isDropdownOpen = false;

    contaBtn.addEventListener('click', (e) => {
        e.preventDefault();
        isDropdownOpen = !isDropdownOpen;
        dropdownMenu.style.display = isDropdownOpen ? 'block' : 'none';
    });

    // Fecha o dropdown se tocar fora
    document.addEventListener('click', (e) => {
        if (!e.target.closest('.dropdown')) {
            dropdownMenu.style.display = 'none';
            isDropdownOpen = false;
        }
    });
        document.addEventListener('DOMContentLoaded', function () {
        const dropdownBtn = document.querySelector('.dropdown .btn-entrar');
        const dropdown = document.querySelector('.dropdown');

        // Ativa o dropdown com toque/click (além do hover)
        dropdownBtn.addEventListener('click', function (e) {
            e.preventDefault();
            dropdown.classList.toggle('open');
        });

        // Fecha ao clicar fora
        document.addEventListener('click', function (e) {
            if (!dropdown.contains(e.target)) {
                dropdown.classList.remove('open');
            }
        });
    });
    </script>
</body>
</html>
