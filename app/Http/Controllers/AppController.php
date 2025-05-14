<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;//Importa a model Produto

class AppController extends Controller
{
    public function produtos(){
        //Captura todos os proudutos da Model
        $produtos = Produto::all();
        return view('welcome', ['prods'=>$produtos]);
    }
    public function sobre(){
        $frame = "(Laravel)";
        $vantagens = ["Sintaxe simples", "Sintaxe concisa", "Sistema modular"];
        return view('sobre', ['frm'=>$frame, 'vtg'=>$vantagens]);
    }

    public function home(){
        $cards = [
    [
        'imagem' => 'https://static-00.iconduck.com/assets.00/laravel-icon-497x512-uwybstke.png',
        'nome' => 'Nuvem',
        'texto' => 'Plataforma de infraestrutura totalmente gerenciada para implantação e hospedagem PHP.',
        'preco' => 'A partir de US$ 0,00/mês'
    ],
    [
        'imagem' => 'https://static-00.iconduck.com/assets.00/laravel-icon-249x256-4gdjrenn.png',
        'nome' => 'Forja',
        'texto' => 'Gerenciamento de servidores para aplicativos no DigitalOcean, Vultr, Amazon, Hetzner e muito mais',
        'preco' => 'A partir de US$ 12,00/mês'
    ],
    [
        'imagem' => 'https://static-00.iconduck.com/assets.00/laravel-icon-497x512-uwybstke.png',
        'nome' => 'Vigília Noturna',
        'texto' => 'Monitoramento e insights incomparáveis sobre o desempenho do seu aplicativo Laravel.',
        'preco' => 'Preços em breve'
    ],
    [
        'imagem' => 'https://static-00.iconduck.com/assets.00/laravel-icon-249x256-4gdjrenn.png',
        'nome' => 'Nova',
        'texto' => 'A maneira mais simples e rápida de criar painéis de administração prontos para produção.',
        'preco' => 'A partir de $ 99,00'
    ]
];
    return view('home', ['crd'=>$cards]);
    }
}

?>