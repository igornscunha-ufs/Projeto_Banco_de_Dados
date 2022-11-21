<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastrar sessão</title>
        <style>
            label{
                float: left;
                display: block;
                width: 120px;
            }
        </style>
    </head>
    <body>
        <form action= "{{ url('session/new')}}" method="post">
        @csrf
            <div><label for="id_sessao">ID da sessão</label><input type="text" name="id_sessao" id="id_sessao"></div>
            <div><label for="filme_nome">Nome do Filme</label><input type="text" name="filme_nome" id="filme_nome"></div>
            <div><label for="sala">Sala</label><input type="text" name="sala" id="sala"></div>
            <div><label for="horario">Horário</label><input type="text" name="horario" id="horario"></div>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>