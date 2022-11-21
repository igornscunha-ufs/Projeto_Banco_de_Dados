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
        <form>
        @csrf
            <div><label for="id_ingresso">ID do Ingresso</label><input type="number" name="id_ingresso" id="id_ingresso"></div>
            <div><label for="filmes_nome">Nome do Filme</label><input type="text" name="filmes_nome" id="filmes_nome"></div>
            <div><label for="preco">Preço</label><input type="number" name="preco" id="preco"></div>
            <div><label for="sala">Sala</label><input type="text" name="sala" id="sala"></div>
            <div><label for="cadeira">Cadeira</label><input type="text" name="cadeira" id="cadeira"></div>
            <div><label for="horario">Horário</label><input type="time" name="horario" id="horario"></div>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>