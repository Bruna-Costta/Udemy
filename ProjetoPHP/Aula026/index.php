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

        $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

        echo '<pre>';
        print_r($lista_frutas);
        echo '<pre>';

        $existe = in_array('Morango', $lista_frutas);

        if($existe){
            echo 'Sim, o valor pesquisado existe no array';
        } else{
            echo 'Não, o valor pesquisado não existe no array';
        }

    ?>
    
</body>
</html>