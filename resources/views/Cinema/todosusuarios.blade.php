<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lista de Usuários</title>
</head>
    <body>
        <table>
        <tr><th>cpf</th><th>Nome</th><th>Tipo</th><th>e-mail</th></tr></th><th></th></tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user->cpf}}</td>
                <td>{{$user->nome}}</td>
                <td>{{$user->tipo}}</td>
                <td>{{$user->email}}</td>
                <td><a href=" {{ route('editar_usuario', ['id'=>$user->id])}}"
                    title="Editar Usuário" >Editar</a></td>
                <td><a href=" {{ route('excluir_usuario', ['id'=>$user->id])}}"
                    title="Excluir Usuário" >Excluir</a></td>
            </tr>
        @endforeach
    </body>
</html>