<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>
</head>
<body>

    <?php
        //string
        $nome = 'Jorge';

        //int
        $idade = 21;

        //float
        $peso = 79.5;

        //boolean
        $fumante = true;            //(true = 1) ou (false = vazio)



    ?>

    <h1>Ficha cadastral</h1>
    <br>
    <p>Nome: <?php echo $nome ?> </p>
    <p>Idade: <?php echo $idade ?> </p>
    <p>Peso: <?php echo $peso ?> </p>
    <p>Fumante: <?php echo $fumante ?> </p>
    
</body>
</html>