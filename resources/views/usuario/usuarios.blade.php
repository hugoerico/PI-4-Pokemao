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
        <h1 class="h1CriarProd">Usuarios Cadastrados</h1>

        <div class="mt-3">
            <table class="table table-striped">
                <thead>
                    <tr>

                        <th>
                            ID
                        </th>
                        <th>
                            Nome
                        </th>
                        <th>
                            E-mail
                        </th>
                        <th>
                            adm sim ou não
                        </th>
                        <th>
                            opções
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $usuario)

                    <tr>

                        <td>{{$usuario->id}}</td>
                        <td>{{$usuario->name}}</td>
                        <td>{{$usuario->email}}</td>
                        <td><?php
                            if ($usuario->IsAdmin == 1) {
                                echo "Administrador";
                            } else {
                                echo "Normal";
                            }
                            ?></td>
                        <td>
                            <a href="{{Route('usuario.editar',$id=$usuario->id)}}" class="btn btn-warning botaoIndex">editar</a>

                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>

        </div>
       

    </main>
</body>

</html>