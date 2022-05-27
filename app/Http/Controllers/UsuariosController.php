<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class UsuariosController extends Controller
{
    public function index(){
        return view(
            'index'
        );
    }

    public function form(){
        return view(
            'form'
        );
    }
    public function store(Request $request){

        $usuarios = new Usuarios;

        $usuarios->nome = $request->nome;
        $usuarios->email = $request->email;
        $usuarios->nascimento = $request->nascimento;

        $usuarios->save();
        return redirect('/home');
    }
}
