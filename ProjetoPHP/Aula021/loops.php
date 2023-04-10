<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>

    <?php

        $num = 1;
        //operadores comparação / lógica

        echo '-- Início do loop -- <br/>';
        while($num < 10){

            //$num++;  //critério de parada
            $num += 1;

            if($num == 2 || $num == 6){

                continue;

            }
            echo "$num <br/>";

            /*
            if($num > 100) {
                break;
            }
            */
        }
        echo '-- Fim do loop --';

    ?>
    
</body>
</html>