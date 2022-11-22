<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cinema</title>
</head>
    <body>
        <table>
        <tr><th>Bem vindo ao nosso cinema</th></tr>
            <tr>
                <td><a href=" {{ route('listar_filmes')}}"
                    title="Listar Filmes" >Listar Filmes</a></td>  
            </tr>
        <tr>
            <td><a href=" {{ route('listar_sessoes')}}"
                title="Listar Sessões" >Listar Sessões</a></td>
        </tr>
            <td><a href=" {{ route('listar_usuarios')}}"
                title="Listar Usuários" >Listar Usuários</a></td>
        <tr>
            <td><a href=" {{ route('listar_reservas')}}"
                title="Listar Reservas" >Listar Reservas</a></td>  
        <tr>
    </body>
</html>