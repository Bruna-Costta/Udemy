<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>

    <?php

        /*
        //sequenciais (numéricos)
        $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacaxi');

        echo '<pre>';
            var_dump($lista_frutas);
        echo '</pre>';
        echo '<hr/>';
        echo '<pre>';
            print_r($lista_frutas);
        echo '</pre>';
        */

        /*
        $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacaxi'];
        $lista_frutas[] = 'Acerola';

        echo $lista_frutas[4];
        */

        //associativos
        $lista_frutas = array(
            'a' => 'Banana',
            'b' => 'Maçã',
            'r' => 'Morango',
            'm' => 'Uva',
            '13' => 'Abacaxi');

        echo '<pre>';
        var_dump($lista_frutas);
        echo '</pre>';

        
    ?>
    
</body>
</html>