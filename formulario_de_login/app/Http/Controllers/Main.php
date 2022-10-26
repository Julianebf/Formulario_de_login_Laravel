<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;



class Main extends Controller
{
    public function index(){
        
        if(session()->has('usuario')){
            echo 'logado';
        } else{
            return redirect()->route('login');
        }

    }

    public function login(){
        return view('login_layout');
    }

    public function login_submit(LoginRequest $request){

        
        $request->validated();
        
        $usuario = $request->input('usuario');
        $senha = $request->input('senha');

        $usuario = Usuario::where('usuario', $usuario)->first();

        if(!$usuario){
            echo 'ERRO';
            return;
        }

        if(Hash::check($senha, $usuario->senha)){
            echo 'OK';
        }
        else{
            echo 'not ok';
            return;
        }


    }

    public function temp(){

        $usuario = new Usuario;
        $usuario->usuario = 'user@gmail.com';
        $usuario->senha = Hash::make('abc123');
        $usuario->save();

        echo 'terminado';

    }
}
