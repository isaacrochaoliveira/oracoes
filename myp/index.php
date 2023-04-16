<?php

require_once('../conexao.php');
require_once('../config.php');
require_once('../protect.php');
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Orações</title>
</head>
<body>
    <h1><?=$_SESSION['nome']?> <a href="<?=URL_BASE.'/logout'?>">SAIR</a></h1>
</body>
</html>