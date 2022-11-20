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
        <form>
        @csrf
            <div><label for="nome">Nome</label><input type="text" name="nome" id="nome"></div>
            <div><label for="cpf">Cpf</label><input type="number" name="cpf" id="cpf"></div>
            <div><label for="tipo">Tipo</label><input type="text" name="tipo" id="tipo"></div>
            <div><label for="email">Email</label><input type="email" name="email" id="email"></div>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>