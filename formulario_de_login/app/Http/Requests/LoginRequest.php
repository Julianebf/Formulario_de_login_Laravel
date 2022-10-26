<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    
    public function rules()
    {
        return [
            'usuario' => ['required', 'email'],
            'senha' => ['required', 'min:3', 'max:20']
        ];
    }

    public function messages(){
        return[
            'usuario.required' => 'O usuário é de preenchimento obrigatório',
            'usuario.email' => 'O usuario temque ser um email valido',
            'senha.required' => 'A senha é de preenchimento obrigatório',
            'senha.min' => 'A senha tem que ter no minimo : size caracters.',
            'senha.max' => 'A senha tem que ter no minimo : size caracters.'

        ];
    }
}
