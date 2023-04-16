<?php

require_once('conexao.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="bg-dark text-light">
    <form method="post" action="#" class="text-center w-50 mx-auto">
        <div class="bg-white text-dark rounded-3 my-5 py-5">
            <div>
                <h1>Sistema de Orações</h1>
            </div>
            <div class="mx-5 mt-3">
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="">E-mail</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="E-mail">
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha">
                    </div>
                </div>
                <div class="row mt-4">
                    <button class="btn btn-primary">Sing-in</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>