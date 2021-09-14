<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar um produto</title>
</head>
<body>
    <h1>editar produto</h1>

    <form action="{{Route('produto.update',$produto->id)}}" method="post" enctype="multipart/form-data">
    @csrf

    <label for="">nome</label>
    <input type="text" name="nome"
    value="{{$produto->nome}}">

    <br>

    <label for="">quantidade</label>
    <input type="number"name="quantidade" min="0" max="100" value="{{$produto->quantidade}}">

    <br>

    <label for="">preço</label>
    <input type="number" name="preco" min="0.00" max="10000.00" value="{{$produto->preco}}">

    <br>

    <label for="">descrição</label>
    <input type="text" name="descricao"  value="{{$produto->descricao}}">

    <br>

    <label for="">imagem</label>
    <input type="file" name="imagem"  >

    <br>

    <div>
        <span>categoria</span>

        <select name="categoria_id" id="">
            @foreach($categorias as categoria)

            <option value="{{$categoria=>id}}" @if($categoria->id == $produto->categoria_id) selected @andif >{{$categoria->nome}}</option>

            @andforeach

        </select>

    </div>

    <br>

    <div>
        <span>tipos</span>

        <select name="tipos[]" id="" multiple>
            @foreach($tipos as tipo)

            <option value="{{$tipo=>id}}" @if($produto->tipos->contains($tipo->id))selected @andif>{{$tipo->nome}}</option>

            @andforeach

        </select>

    </div>

    <br>

    <button type="submit">salvar</button>


    </form>
    
</body>
</html>