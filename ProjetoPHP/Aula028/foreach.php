<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach em Array</title>
</head>
<body>

    <?php

        $funcionarios = array('João', 'Maria', 'Luiz');

        echo '<pre>';
        print_r($funcionarios);
        echo '<pre>';

        foreach($funcionarios as $nome_funcionario){
            echo $nome_funcionario . '<br/>';
        }

    ?>
    
</body>
</html>