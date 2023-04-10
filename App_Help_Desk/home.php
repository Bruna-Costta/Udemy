<?php

include 'validador_acesso.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Help Desk</title>
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <header id="home">
        <nav class="navbar navbar-expand-sm">
            <div class="container">
                <div class="col-1 img">
                    <img src="img/logo.png" width=50 height=50 class="img-logo">
                </div>
                <div class="col-11 texto-img">
                    <h2 class="texto-home">App Help Desk</h2>
                </div>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" id="link-sair" href="logoff.php">SAIR</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="card-home" id="menu-home">
                    <div class="card">
                        <div class="card-header">
                            <h4>Menu</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 d-flex justify-content-center">
                                    <a href="abrir_chamado.php">
                                        <img src="img/formulario_abrir_chamado.png" width="70" height="70">
                                    </a>
                                </div>
                                <div class="col-6 d-flex justify-content-center">
                                    <a href="consultar_chamado.php">
                                        <img src="img/formulario_consultar_chamado.png" width="70" height="70">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>