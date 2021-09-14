<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <title>Lista de Tipos</title>
</head>
<body>
@include('layouts.menu')
    <main>
@if(session()->has('sucesso'))
<div>
{{session()->get('sucesso')}}
</div>
@endif

<button><a href="{{route('tipo.create')}}">criar Tipo</a></button>

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
                    opções
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($tipos as $tipo)
            <tr>
            <td>{{$tipo->id}}</td>
             <td>{{$tipo->nome}}  {{$tipo->produtos()->count()}}</td>
            
                <td>
                    <a href="http://">visualizar</a>

                    <a href="{{Route('tipo.edit',$tipo->id)}}">editar</a>

                    <form method="post" action="{{Route('tipo.destroy',$tipo->id)}}">

                    @method('DELETE')
                    @csrf
                    

                    <button type="submit">apagar</button>
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