<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class NomeController extends Controller
{
    public function nome(){
        return view('site.nome');
    }

    public function nome_enviar(Request $request){
        $nome = $request->input('nome');

        // Salva no banco
        $user = Usuario::create(['nome' => $nome]);

        // Guarda o id do usuário na sessão
        $request->session()->put('user_id', $user->id);

        // Redireciona para a home
        return redirect()->route('site.home');
    }
}
