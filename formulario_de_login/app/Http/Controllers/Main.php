<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function index(){
        
        // if(session()->has('usuario')){
        //     echo 'logado';
        // } else{
        //     return redirect()->route('login');
        // }
        return view ('login_layout');

    }

    public function login(){
        return view('login');
    }
}
