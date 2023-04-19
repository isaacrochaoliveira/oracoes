<?php

require_once('../conexao.php');
require_once('../config.php');
require_once('../protect.php');
@session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?=ASSETS.'css/myp.css'?>">
    <link rel="stylesheet" href="<?=ASSETS.'css/global.css'?>">
    <title>Sistema de Orações</title>
</head>

<body>
    <section class="section__background-pray">
        <nav class="navbar navbar-expand-lg black-transparent py-3">
            <div class="container-fluid">
                <a class="navbar-brand allura text-light" style="font-size: 26px" href="#"><?=NS?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-light" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Orações</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Pastores</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Perfil
                            </a>
                            <ul class="dropdown-menu  bg-dark">
                                <li><a class="dropdown-item text-light" href="#">Editar Perfil</a></li>
                                <li><a class="dropdown-item text-light" href="#">Visualizar Perfil</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-light" href="#">Log-out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="white">
            <h1 class="cookie size-65">Um centro de oração para um orarmos pelos outros</h1>
            <hr>
            <p class="letter-spacing roboto-condensed">Vamos orar uns pelos outros, para podermos chamar a atenção de Deus</p>
        </div>
    </section>
    <section class="mx-3 pb-5">
        <div class="pt-5">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <?php
                        $query = $pdo->query("SELECT * FROM citacoes where id_citacao = '1';");
                        $res = $query->fetchAll(PDO::FETCH_ASSOC);
                        if (count($res) > 0) {
                            $nome_sabio = $res[0]['nome_sabio'];
                            $citacao = $res[0]['texto_sabio'];
                            ?>
                            <div class="carousel-item active">
                                <img src="<?=ASSETS.'/imgs/convertidas/citacoes_back.webp'?>" class="d-block w-100">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="roboto-condensed size-35"><?=$nome_sabio?></h5>
                                    <div>
                                        <p class="roboto-condensed"><?=$citacao?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
                </div>
                <div class="carousel-inner">
                    <?php
                        $query = $pdo->query("SELECT * FROM citacoes where id_citacao = '2';");
                        $res = $query->fetchAll(PDO::FETCH_ASSOC);
                        if (count($res) > 0) {
                            $nome_sabio = $res[0]['nome_sabio'];
                            $citacao = $res[0]['texto_sabio'];
                        ?>
                            <div class="carousel-item">
                                <img src="<?=ASSETS.'/imgs/convertidas/citacoes_back.webp'?>" class="d-block w-100">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="roboto-condensed size-35"><?=$nome_sabio?></h5>
                                    <div>
                                        <p class="roboto-condensed"><?=$citacao?></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                    ?>
                </div>
                <div class="carousel-inner">
                    <?php
                        $query = $pdo->query("SELECT * FROM citacoes where id_citacao = '3';");
                        $res = $query->fetchAll(PDO::FETCH_ASSOC);
                        if (count($res) > 0) {
                            $nome_sabio = $res[0]['nome_sabio'];
                            $citacao = $res[0]['texto_sabio'];
                        ?>
                            <div class="carousel-item">
                                <img src="<?=ASSETS.'/imgs/convertidas/citacoes_back.webp'?>" class="d-block w-100">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="roboto-condensed size-35"><?=$nome_sabio?></h5>
                                    <div>
                                        <p class="roboto-condensed"><?=$citacao?></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section class="mx-3 mb-3">
        <div class="d-flex flex-wrap">
            <div class="w-50" style="padding: 80px 0px 0px 50px">
                <div class="pb-4">
                    <h2 class="roboto-condensed-light">Tiago 5:16</h2>
                    <hr>
                    <p class="roboto-condensed line-height">Confessai as vossas culpas uns aos outros, e orai uns pelos outros, para que sareis. A oração feita por um justo pode muito em seus efeitos</p>
                </div>
                <div>
                    <h2 class="roboto-condensed-light">João 13:14</h2>
                    <hr>
                    <p class="roboto-condensed line-height">Ora, se eu, Senhor e Mestre, vos lavei os pés, vós deveis também lavar os pés uns aos outros</p>
                </div>
            </div>
            <div class="w-50 text-center">
                <img src="<?=ASSETS.'imgs/convertidas/orai_pelos_outros.webp'?>" alt="Imagem da Bíblia Sagrada" style="border: 7px solid #000; border-radius: 2%">
            </div>
        </div>
    </section>
    <section class="py-5 px-5 bg-dark text-light">
        <div class="">
            <h2 class="cookie size-50">Alguns usuários</h2>
        </div>
        <div class="border p-2">
            <?php
                $query = $pdo->query("SELECT * FROM cliente LIMIT 15;");
                $res = $query->fetchAll(PDO::FETCH_ASSOC);
                if (count($res) > 0) {
                    for ($i = 0;$i < count($res); $i++) {
                        foreach ($res[$i] as $key => $value) {
                        }
                        $nome = $res[$i]['nome'];
                        $perfil = $res[$i]['foto'];
                        $bio = $res[$i]['bio'];
                        ?>
                            <div class="card" style="width: 18rem;">
                                <img src="<?=ASSETS."imgs/convertidas/$perfil"?>" class="card-img-top" alt="Foto de Usuário do Cliente">
                                <div class="card-body">
                                    <h5 class="card-title"><?=$nome?></h5>
                                    <p class="card-text"><?=$bio?></p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        <?php
                    }
                }
            ?>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>
