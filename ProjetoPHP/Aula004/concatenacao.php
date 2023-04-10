<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenação</title>
</head>
<body>

    <?php

        $nome = 'Maria';
        $cor = 'Rosa';
        $idade = 23;
        $atividade = 'andar de bicicleta';


        echo 'Olá '. $nome .', 
        vi que sua cor preferida é '.  $cor .', 
        estou vendo também que você possui '. $idade .' anos e 
        que você gosta de ' . $atividade;

    ?>
    
</body>
</html>