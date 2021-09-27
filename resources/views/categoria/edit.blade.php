<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar uma categoria</title>
</head>

<body>
    <h1>editar categoria</h1>

    <form action="{{Route('categoria.update',$id=$c[0])}}" method="post">
    @method('PATCH')
    @csrf

        <label for="">nome</label>
        <input type="text" name="nome" value="{{$c[1]}}">

        <br>


        <button type="submit">salvar</button>


    </form>

</body>

</html>