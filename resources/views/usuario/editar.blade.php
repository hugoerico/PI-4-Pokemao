<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>criar um produto</title>
</head>

<body>
    @include('layouts.menu')
    <main class="container mt-5 formCriarProd">
        <h1 class="h1CriarProd">Usuarios torna admin</h1>

        <form action="{{Route('usuario.updater',$id=$tudo[0])}}" method="post" >
        @method('patch')
        @csrf

        <div class="row">
            <label for="" class="form-label">id</label>
            <p class="form-control">{{$tudo[0]}}</p>
        </div>

        <div class="row">
            <label for="" class="form-label">nome</label>
            <p class="form-control">{{$tudo[1]}}</p>
        </div>

        <div class="row">
            <label for="" class="form-label">e-mail</label>
            <p class="form-control">{{$tudo[2]}}</p>
        </div>

        <div class="row">
            <span class="form-label">admin ou nao</span>

            <select class="form-select" name="isadmin" id="">
                
                <option value="0" >Normal</option>

                <option value="1" >Administrador</option>

                

            </select>

        </div>

        <div class="row mt-4">

                <button type="submit" class="btn btn-success btn-sm mb-4">Salvar</button>

        </div>
        </form>
            
    </main>
</body>

</html>