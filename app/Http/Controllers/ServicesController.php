<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class ServicesController extends Controller
{
     public function services(Request $request){
        $user_id = $request->session()->get('user_id');

        if ($user_id) {
            $user = Usuario::find($user_id);
            $nome = $user ? $user->nome : null;
        } else {
            $nome = null;
        }

        return view('site.services', compact('nome'));
    }
}
