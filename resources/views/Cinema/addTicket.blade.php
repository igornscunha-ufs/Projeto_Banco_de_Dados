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
                width: 120px;
            }
        </style>
    </head>
    <body>
        <form action= "{{ url('ticket/new')}}" method="post">
        @csrf
            <div><label for="id_ingresso">ID do Ingresso</label><input type="text" name="id_ingresso" id="id_ingresso"></div>
            <div><label for="filme_nome">Nome do Filme</label><input type="text" name="filme_nome" id="filme_nome"></div>
            <div><label for="valor">Preço</label><input type="text" name="valor" id="valor"></div>
            <div><label for="sala">Sala</label><input type="text" name="sala" id="sala"></div>
            <div><label for="cadeira">Cadeira</label><input type="text" name="cadeira" id="cadeira"></div>
            <div><label for="horario">Horário</label><input type="text" name="horario" id="horario"></div>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>