<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>

    <?php

        $itens = array('Sofá', 'Mesa', 'Cadeira', 'Fogão', 'Geladeira');

        echo '<pre>';
        print_r($itens);
        echo '<pre>';

        foreach ($itens as $item) {
            echo "$item <br/>";
        }

    ?>

</body>
</html>