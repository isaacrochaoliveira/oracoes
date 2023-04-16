<?php

try {
    $pdo = new PDO('mysql:dbname=oracoes;host=localhost;charset=utf8mb4', 'root', '');
} catch (PDOException $ex) {
    echo "Erro ao se conectar: ".$ex->getMessage();
}

?>