<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>criar uma categoria</title>
</head>
<body>
    <h1>cadastrar categoria</h1>

    <form action="{{Route('categoria.store')}}" method="post">
    @csrf

    <label for="">nome</label>
    <input type="text" name="nome">

   

    <button type="submit">salvar</button>


    </form>
    
</body>
</html>