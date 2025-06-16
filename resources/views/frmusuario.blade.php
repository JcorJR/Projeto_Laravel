@extends ('template')
@section('titulo','Add Usuário')
@section('conteudo')
     <div class="conteudo">
        <div class="contain">
            <form action="/addproduto" method="POST" enctype="multipart/form-data">
                @crsf
                    <label for="nome">Nome</label>
                    <input type="text" id="fnome" name="fnome" required>

                    <label for="email">E-mail</label>
                    <input type="email" id="femail" name="femail" required>

                    <label for="quantidade">Senha</label>
                    <input type="password" id="fsenha" name="fsenha" required>

                    <input type="submit" value="Cadastrar">
            </form>
        </div>
    </div>
@endsection