<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Comprar Ingresso</title>
</head>
    <body>
        <table>
        <tr><th>Id_Ingresso</th><th>Filme</th><th>Preço</th><th>Sala</th><th>Assento</th><th>Horário</th></tr></th><th></th></tr>
        @foreach($tickets as $ticket)
            <tr>
                <td>{{$ticket->id_ingresso}}</td>
                <td>{{$ticket->filme_nome}}</td>
                <td>{{$ticket->valor}}</td>
                <td>{{$ticket->sala}}</td>
                <td>{{$ticket->cadeira}}</td>
                <td>{{$ticket->horario}}</td>
                <td><a href=" {{ route('editar_ingresso', ['id'=>$ticket->id])}}"
                    title="Editar Ingresso" >Editar</a></td>
                <td><a href=" {{ route('excluir_ingresso', ['id'=>$ticket->id])}}"
                    title="Excluir Ingresso" >Excluir</a></td>
            </tr>
        @endforeach
    </body>
</html>