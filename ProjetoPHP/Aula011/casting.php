<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting</title>
</head>
<body>

    <?php

        // Conversão 
        //gettype() => retornar o tipo da variável

        
        $valor = 15.35;
        $valor2 = (int) $valor;

        echo $valor. ' ' . gettype($valor);
        echo '<br/>';
        echo $valor2. ' ' . gettype($valor2);

    ?>
    
</body>
</html>