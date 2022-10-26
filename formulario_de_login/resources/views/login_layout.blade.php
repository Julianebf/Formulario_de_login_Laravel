<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>
<body>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <div class="logo"></div>
    <div class="login-block">
    <h1>Login</h1>
    <form action="{{route('login_submit')}}" method="post">
        @csrf
    <input type="text" value="" placeholder="Usuário" name="usuario" />
    <input type="password" value="" placeholder="senha" name="senha" />
    <button>Entrar</button>
    </form>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $mensagem)
                <li>{{$mensagem}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
</body>
</html>