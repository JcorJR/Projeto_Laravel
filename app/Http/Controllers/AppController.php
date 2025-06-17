<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Usuario;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session; // <-- ADICIONAR ISSO

class AppController extends Controller
{
    public function logout() {
        Session::flush();
        return redirect('/');
    }

    public function dashboard() {
        if (!session()->has('usuario_id')) {
            return redirect('/frmlogin');
        }
        return view('dashboard');
    }

    public function frmlogin(){
        return view('frmlogin');
    }

    public function logar(Request $request){
        $user = Usuario::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->senha, $user->senha)) {
            return redirect('/frmlogin'); 
        }

        Session::put('usuario_id', $user->id);
        Session::put('usuario_nome', $user->nome);

        return view('dashboard');
    }

    public function excluirusuario($id){
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return redirect('usuarios');
    }

    public function atualizarusuario(Request $request, $id){
        $usuario = Usuario::findOrFail($id);

        $dados = [
            'nome' => $request->fnome,
            'email' => $request->femail
        ];

        if (!empty($request->fsenha)) {
            $dados['senha'] = Hash::make($request->fsenha); // <-- CORRIGIDO
        }

        $usuario->update($dados);

        return redirect('usuarios');
    }

    public function frmeditusuario($id){
        $usuario = Usuario::findOrFail($id);
        return view('frmeditusuario',['user'=>$usuario]);
    }

    public function addusuario(Request $request){
        $usuario = new Usuario();
        $usuario->nome = $request->fnome;
        $usuario->email = $request->femail;
        $usuario->senha = Hash::make($request->fsenha);
        $usuario->save();
        return redirect('frmlogin');
    }

    public function usuarios(){
        if (!session()->has('usuario_id')) {
            return redirect('/frmlogin');
        }
        $usuarios = Usuario::all();
        return view('usuarios',['users'=>$usuarios]);
    }

    public function frmusuario(){
        return view('frmusuario');
    }

  public function frmeditproduto($id){
        $produto = Produto::findOrFail($id);
        return view('frmeditproduto',['prod'=>$produto]);
    }

    public function excluirproduto($id){
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return redirect('listaprodutos');
    }

public function listaprodutos(){
    if (!session()->has('usuario_id')) {
            return redirect('/frmlogin');
        }
    $listaprodutos = Produto::all(); 
    return view('listaprodutos',['liprods'=>$listaprodutos]);
}

public function atualizarproduto(Request $request, $id) {
    $produto = Produto::findOrFail($id);

    $dados = [
        'nome' => $request->fnome,
        'preco' => $request->fpreco,
        'quantidade' => $request->fquantidade
    ];

    if ($request->hasFile('fimagem')) {
        $path = $request->file('fimagem')->store('imagem', 'public');
        $dados['imagem'] = $path;
    }

    $produto->update($dados);

    return redirect('listaprodutos');
}

public function addproduto(Request $request){
    $prod = new Produto();

    $prod->nome = $request->nome;
    $prod->preco = $request->preco;
    $prod->quantidade = $request->quantidade;

    if($request->hasFile('imagem')){
        $path = $request->file('imagem')->store('imagem', 'public');
        $prod->imagem = $path;
    }

    $prod->save();

    return redirect('produtos');
}

    public function frmproduto() {
        if (!session()->has('usuario_id')) {
            return redirect('/frmlogin');
        }
        return view('frmproduto');
    }
    
public function contatos(){
    return view('contatos');
}

public function produtos(){
    $produtos = Produto::all();
    return view('produtos', ['prods'=>$produtos]);
}

public function sobre(){
    $frame = "(Laravel)";
    $vantagens = ["Sintaxe simples", "Sintaxe Concisa", "Sistema modular"];
    return view('sobre',['frm'=>$frame, 'vtg'=>$vantagens]);
}

public function home() {
    $products = Produto::all();
    return view('home', ['crd' => $products]);
}
}

?>