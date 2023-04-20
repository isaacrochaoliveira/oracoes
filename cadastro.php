<?php

require_once('conexao.php');
require_once('config.php');

?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
        <link rel="stylesheet" href="assets/css/global.css">
        <title>Cadastro</title>
    </head>
    <body class="bg-dark">
        <div class="bg-white w-50 mx-auto my-5 py-3">
            <form class="mx-5" action="index.html" method="post">
                <h1 class="text-center py-2 cookie">Faça seu cadastro</h1>
                <div class="row mb-3">
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" name="nome" id="nome" placeholder="Informe seu nome" class="form-control">
                            <label for="nome">Nome</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="form-floating">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Seu E-mail de acesso">
                            <label for="email">Seu E-mail de Login</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="form-floating">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Sua senha de acesso">
                            <label for="password">Sua senha de Acesso</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="form-floating">
                            <input type="number" name="phone" id="phone" class="form-control" placeholder="Seu telefone">
                            <label for="phone">Seu Telefone/WhatsApp</label>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <button type="submit" name="btnCadastrar" class="btn btn-primary w-25 mb-2">Salvar Cadastro</button>
                    <a href="<?=URL_BASE.'/index.php'?>">Já tenho uma conta</a>
                </div>
            </form>
        </div>
    </body>
</html>
