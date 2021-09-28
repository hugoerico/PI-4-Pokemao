<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>criar um tipo</title>
</head>
<body>
@include('layouts.menu')
    <h1 class="h1Categoria">Cadastrar tipo</h1>

    <form action="{{Route('tipo.store')}}" method="post">
    @csrf

    <label for="" class="formCateg">Nome: </label>
    <input type="text" name="nome" class="inputCateg" >

   

    <button type="submit"  class=" btn botaoCriar">Salvar</button>


    </form>
    
</body>
</html>