<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Nativas</title>
</head>
<body>

    <?php

        $texto ='atividade PHP';

        // string to lower  (converte tudo para minusculo)
        echo $texto . '<br/>';
        echo strtolower($texto);

        echo '<hr/>';

        // string to upper  (converte tudo para maiuscula)
        echo $texto . '<br/>';
        echo strtoupper($texto);

        echo '<hr/>';

        // upper case first   (converte a primeira letra para maiuscula)
        echo $texto . '<br/>'; 
        echo ucfirst($texto);

        echo '<hr/>';

        // string lenght  (conta a quantidade de caracteres)
        echo $texto . '<br/>'; 
        echo strlen($texto);

        echo '<hr/>';

        // string replace  (substitui uma cadeia de caracteres)
        echo $texto . '<br/>'; 
        echo str_replace('', '', 'Bruna');

    ?>
    
</body>
</html>