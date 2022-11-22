<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Todas as Sessões Reservadas</title>
</head>
    <body>
        <table>
        <tr><th>Id_usuario</th><th>Id_Sessão</th></tr></th><th></th></tr>
        @foreach($usersessions as $usersession)
            <tr>
                <td>{{$usersession->user_id}}</td>
                <td>{{$usersession->session_id}}</td>
            </tr>
        @endforeach
        <td><a href=" {{ route('home')}}"
            title="Home" >Home</a></td>
    </body>
</html>