<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar um tipo</title>
</head>
<body>
    <h1>editar tipo</h1>

    <form action="{{Route('tipo.update',$tipo->id)}}" method="post">
    @method('PATCH')
    @csrf

    <label for="">nome</label>
    <input type="text" name="nome"
    value="{{$tipo->nome}}">

    <br>


    <button type="submit">salvar</button>


    </form>
    
</body>
</html>