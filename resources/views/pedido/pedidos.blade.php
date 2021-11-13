<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Pedidos</title>
</head>

<body>
    @include('layouts.menu')
    <main class="container mt-5 formCriarProd">
        <h1 class="h1CriarProd">Pedidos</h1>

        <div class="mt-3">
            <table class="table table-striped">
                <thead>
                    <tr>

                        <th>
                            ID
                        </th>
                        <th>
                           Usuário ID
                        </th>
                        <th>
                           Nome
                        </th>
                        <th>
<<<<<<< HEAD
                            status
=======
                            Status
>>>>>>> 9f41577542aa84862e004a3c3dc7fbc71807bd6c
                        </th>
                        <th>
                            Editar Status
                        </th>
                        <th>
                            Itens Pedido
                        </th>
                        

                    </tr>
                </thead>
                <tbody>
                    @foreach($pedidos as $pedido)
                    

                    <tr>

                        <td>{{$pedido->id}}</td>
                        <td>{{$pedido->user_id}}</td>
                        <td>
                        <?php 
                        foreach ($nomes as $nome) {
                            if ($nome->id == $pedido->user_id) {
                                echo($nome->name);
                            }
                        }
                        
                        ?>
                        </td>
                        <td>{{$pedido->status}}</td>
                        <td>
                            <a href="{{Route('pedido.editarStatus',$id=$pedido->id)}}" class="btn btn-warning botaoIndex">editar</a>

                        </td>
                        <td>
                            <a href="{{Route('pedido.item',$id=$pedido->id)}}" class="btn btn-success botaoIndex">Itens</a>

                        </td>
                       
                    </tr>

                    @endforeach
                </tbody>
            </table>

        </div>
       

    </main>
</body>

</html>