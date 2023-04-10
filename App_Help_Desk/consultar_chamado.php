<?php

include 'validador_acesso.php';

?>

<?php

// chamados
$chamados = array();

// abrir o arquivo.hd
$arquivo = fopen('arquivo.hd', 'r');

//enquanto houver registros (linhas) a serem recuperados
while(!feof($arquivo)) {  // testa pelo fim de um arquivo

    $registro = fgets($arquivo);
    $chamados[] = $registro;
}

fclose($arquivo);

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
            <div class="col-12" id="consultarChamado">

                <div class="card-consultar-chamado">
                    <div class="card">
                        <div class="card-header">
                            <h4>Consulta de chamado</h4>
                        </div>

                        <div class="card-body">

                            <?php foreach ($chamados as $chamado) { ?>
                                <?php

                                    $chamado_dados = explode('#', $chamado);

                                    if(count($chamado_dados) < 3){
                                        continue;
                                    }



                                ?>

                            <div class="card mb-3 bg-light">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $chamado_dados[0]?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $chamado_dados[1]?></h6>
                                    <p class="card-text"><?php echo $chamado_dados[2]?></p>

                                </div>
                            </div>

                            <?php } ?>

                            <div class="row mt-5">
                                <div class="col-6">
                                    <a class="btn btn-lg btn-warning btn-block" id="botao-consulta" href="home.php">Voltar</a>
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