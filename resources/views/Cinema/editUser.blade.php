<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastrar Usuario</title>
        <style>
            label{
                float: left;
                display: block;
                width: 90px;
            }
        </style>
    </head>
    <body>
        <form action="{{ route('atualizar_usuario', ['id' => $user->id]) }}" method="post">
        @csrf
            <div><label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="{{$user->nome}}"></div>
            <div><label for="cpf">Cpf</label>
            <input type="text" name="cpf" id="cpf" value="{{$user->cpf}}"></div>
            <div><label for="tipo">Tipo</label>
            <input type="text" name="tipo" id="tipo" value="{{$user->tipo}}"></div>
            <div><label for="email">Email</label>
            <input type="text" name="email" id="email" value="{{$user->email}}"></div>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>