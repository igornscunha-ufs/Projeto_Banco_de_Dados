<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastrar Filme</title>
        <style>
            label{
                float: left;
                display: block;
                width: 90px;
            }
        </style>
    </head>
    <body>
        <form action="{{ route('atualizar_filme', ['id' => $movie->id])}}" method="post">
        @csrf
            <div><label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="{{$movie->nome}}" ></div> 
            <div><label for="sinopse">Sinopse</label>
            <input type="text" name="sinopse" id="sinopse"value="{{$movie->sinopse}}"></div>
            <div><label for="duracao">Duração</label>
            <input type="text" name="duracao" id="duracao"value="{{$movie->duracao}}"></div>
            <div><label for="genero">Gênero</label>
            <input type="text" name="genero" id="genero"value="{{$movie->genero}}"></div>
            <div><label for="faixa_etaria">Faixa etária</label>
            <input type="text" name="faixa_etaria" id="faixa_etaria"value="{{$movie->faixa_etaria}}"></div>
            <div><label for="qnt_ingresso">Quantidade</label>
            <input type="text" name="qnt_ingresso" id="qnt_ingresso"value="{{$movie->qnt_ingresso}}"></div>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>
