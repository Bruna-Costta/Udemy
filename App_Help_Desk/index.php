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
                
            </div>

        </nav>
    </header>

        <div class="container">
            <div class="row">
                <div class="col-12 card-login" id="teste">
                    <div class="texto">
                        <h2 class="texto-login">Login</h2>
                    </div>
                    <div class="card-body" id="formulario">

                        <form action="valida_login.php" method="post">
                            <div class="form-group" id="email">
                                <input name="email" type="email" class="form-control" placeholder="E-mail">
                            </div>
                            <div class="form-group" id="senha">
                                <input name="senha" type="password" class="form-control" placeholder="Senha">
                            </div>

                                <?php

                                    if(isset($_GET['login']) && $_GET['login'] == 'erro' ) { ?>

                                        <div class="text-danger">
                                            Usuário ou senha inválido(s)
                                        </div>

                                   <?php }?>

                                   <?php

                                    if(isset($_GET['login']) && $_GET['login'] == 'erro2' ) { ?>

                                        <div class="text-danger">
                                            Faça login antes de acessar as páginas protegidas
                                        </div>

                                   <?php }?>

                            <div class="botao">
                                <button class="btn btn-lg btn-info btn-block" id="botao" type="submit">Entrar</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

</body>

</html>