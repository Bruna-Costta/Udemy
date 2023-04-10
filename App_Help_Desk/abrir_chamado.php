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

                <div class="card-abrir-chamado" id="abrir-chamado">
                    <div class="card">
                        <div class="card-header">
                            <h4>Abertura de chamado</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">

                                    <form method="post" action="registra_chamado.php">
                                        <div class="form-group">
                                            <label>Título</label>
                                            <input name="titulo" type="text" class="form-control" placeholder="Título">
                                        </div>

                                        <div class="form-group">
                                            <label>Categoria</label>
                                            <select name="categoria" class="form-control">
                                                <option>Criação Usuario</option>
                                                <option>Impressora</option>
                                                <option>Hardware</option>
                                                <option>Software</option>
                                                <option>Rede</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Descrição</label>
                                            <textarea name="descricao" class="form-control" rows="3"></textarea>
                                        </div>

                                        <div class="row mt-5" id="botao-abertura">
                                            <div class="col-6">
                                                <a class="btn btn-lg btn-warning btn-block" id="botao-abertura-v" href="home.php">Voltar</a>
                                            </div>

                                            <div class="col-6">
                                                <button class="btn btn-lg btn-info btn-block" type="submit" id="botao-abertura-a">Abrir</button>
                                            </div>
                                        </div>

                                    </form>

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