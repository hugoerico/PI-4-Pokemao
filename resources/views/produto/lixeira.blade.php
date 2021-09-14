<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <title>lista apagador</title>
</head>

<body>
    @include('layouts.menu')
    <main>
@if(session()->has('sucesso'))
<div>
{{session()->get('sucesso')}}
</div>
@endif

<button><a href="{{Route('produto.create')}}">criar produto</a></button>

<br>
<div>
    <table>
        <thead>
            <tr>
            <th>
                    id
                </th>
                <th>
                    nome
                </th>
                <th>
                    quantidade
                </th>
                <th>
                    preço
                </th>
                <th>
                    descrição
                </th>
                <th>
                    categoria
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $produto)
            <tr>
            <td>{{$produto->id}}</td>
             <td>{{$produto->nome}}</td>
             <td>{{$produto->quantidade}}</td>
             <td>{{$produto->preco}}</td>
             <td>{{$produto->descricao}}</td>
             <td>{{$produto->categoria->nome}}</td>

                <td>
                    <form action="{{Route('produto.restaurar',$produto->id)}}" method="post">
                        @method('patch')
                        @csrf

                    <button type="submit">restaurar</button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</main>
</body>
</html>