<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastrar Ingresso</title>
        <style>
            label{
                float: left;
                display: block;
                width: 90px;
            }
        </style>
    </head>
    <body>
        <form action="{{ route('atualizar_ingresso', ['id' => $ticket->id]) }}" method="post">
        @csrf
            <div><label for="id_ingresso">ID do Ingresso</label>
            <input type="text" name="id_ingresso" id="id_ingresso" value="{{$ticket->id_ingresso}}" ></div>
            <div><label for="filme_nome">Nome do Filme</label>
            <input type="text" name="filme_nome" id="filme_nome" value="{{$ticket->filme_nome}}"></div>
            <div><label for="valor">Preço</label>
            <input type="text" name="valor" id="valor" value="{{$ticket->valor}}"></div>
            <div><label for="sala">Sala</label>
            <input type="text" name="sala" id="sala" value="{{$ticket->sala}}" ></div>
            <div><label for="cadeira">Cadeira</label>
            <input type="text" name="cadeira" id="cadeira" value="{{$ticket->cadeira}}" ></div>
            <div><label for="horario">Horário</label>
            <input type="text" name="horario" id="horario" value="{{$ticket->horario}}"></div>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>