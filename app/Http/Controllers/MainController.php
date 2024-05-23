<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function principal()
    {
        return view('principal');
    }

    public function quemSomos()
    {
        return view('quem-somos');
    }

    public function contato()
    {
        return view('contato');
    }

    public function enviarContato(Request $request)
    {
        // Validar os dados do formulário, salvar no banco de dados ou fazer o que for necessário
        // Por enquanto, apenas exibiremos as informações enviadas
        var_dump($request->all());
    }
}