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
                    <button class="btn btn-primary" type="submit">Sing-in</button>
                </div>
            </div>
        </div>
        <?php
            if (isset($_POST['email'])) {
                $email = addslashes($_POST['email']);
                $senha = addslashes($_POST['senha']);
                if (!(empty($email) && empty($senha))) {
                    echo "Informe seu dados de Login!";
                } else {
                    $query = $pdo->query("SELECT * FROM cliente WHERE email = '$email' AND senha = '$senha'");
                    $res = $query->fetchAll(PDO::FETCH_ASSOC);
                    if (count($res) > 0) {
                        if (!isset($_SESSION)) {
                            session_start();
                        }

                        $_SESSION['nome'] = $res[0]['nome'];
                        $_SESSION['email'] = $res[0]['email'];
                        $_SESSION['senha'] = $res[0]['senha'];

                        echo "<script>location.href= 'myp/'";
                    }
                }
            }
            
        ?>
    </form>
</body>
</html>