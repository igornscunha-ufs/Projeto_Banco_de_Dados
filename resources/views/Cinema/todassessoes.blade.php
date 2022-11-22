<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Comprar Sessão</title>
</head>
    <body>
        <table>
        <tr><th>Id_Sessão</th><th>Filme</th><th>Sala</th><th>Horário</th></tr></th><th></th></tr></th></tr>
        @foreach($sessions as $session)
            <tr>
                <td>{{$session->id_sessao}}</td>
                <td>{{$session->filme_nome}}</td>
                <td>{{$session->sala}}</td>
                <td>{{$session->horario}}</td>
                <td><a href=" {{ route('editar_sessao', ['id'=>$session->id])}}"
                    title="Editar Sessão" >Editar</a></td>
                <td><a href=" {{ route('excluir_sessao', ['id'=>$session->id])}}"
                    title="Excluir Sessão" >Excluir</a></td>
                <td><a href=" {{ route('pag_sessao')}}"
                    title="Reservar Sessão" >Reservar</a></td>
            </tr>
        @endforeach
        <td><a href=" {{ route('adicionar_sessao')}}"
            title="Adicionar Sessão" >Adicionar</a></td>
        
    </body>
</html>