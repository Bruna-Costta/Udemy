<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
</head>
<body>

    <?php

        $num1 = 13;
        $num2 = 4;

        echo "A soma entre $num1 e $num2 é " . ($num1 + $num2);
        echo '<br/>';
        echo "A subtração entre $num1 e $num2 é " . ($num1 - $num2);
        echo '<br/>';
        echo "A multiplicação entre $num1 e $num2 é " . ($num1 * $num2);
        echo '<br/>';
        echo "A divisão entre $num1 e $num2 é " . ($num1 / $num2); // retorna a divisão
        echo '<br/>';
        echo "A modularização entre $num1 e $num2 é " . ($num1 % $num2); // retorna o resto da divisão

    ?>
    
</body>
</html>