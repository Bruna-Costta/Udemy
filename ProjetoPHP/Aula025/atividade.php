<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>
<body>

    <!--
        Crie um script capaz de produzir, através de um laço de repetição, um array com 6 elementos
        numéricos aleatórios entre 1 e 60, simulado o funcionario do sorteio da mega sena. Atente-se
        ao fato de que os números aleatórios contidos dentro do array não podem ser repetidos.
     -->

    <?php

        $numeros = array();

        while(count($numeros) <= 5){

            $num = rand(1, 60);
                if(!in_array($num, $numeros)){
                    $numeros[] = $num;
                }
        }

        print_r($numeros);

    ?>
    
</body>
</html>