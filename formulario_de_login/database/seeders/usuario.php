<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class usuario extends Seeder
{
    
    public function run()
    {
        $usuario = new \App\Models\Usuario;
        $usuario->usuario = 'admin@gmail.com';
        $usuario->senha = Hash::make('aaaabbb');
        $usuario->save();
    }
}
