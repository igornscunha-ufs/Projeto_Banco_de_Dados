<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Filmes em Cartaz</title>
</head>
    <body>
        <table>
        <tr><th>Nome</th><th>Sinopse</th><th>Duração</th><th>Gênero</th><th>Faixa Etária</th><th>Quantidade</th></tr></th><th></th></tr>
        @foreach($movies as $movie)
            <tr>
                <td>{{$movie->nome}}</td>
                <td>{{$movie->sinopse}}</td>
                <td>{{$movie->duracao}}</td>
                <td>{{$movie->genero}}</td>
                <td>{{$movie->faixa_etaria}}</td>
                <td>{{$movie->qnt_ingresso}}</td>
                <td><a href=" {{ route('editar_filme', ['id'=>$movie->id])}}"
                    title="Editar Filme" >Editar</a></td>
                <td><a href=" {{ route('excluir_filme', ['id'=>$movie->id])}}"
                    title="Excluir Filme" >Excluir</a></td>
            </tr>
        @endforeach
    </body>
</html>