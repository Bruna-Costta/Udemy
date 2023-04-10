<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>False, Null e Empty</title>
</head>
<body>

    <?php

    // false (true/false) - tipo variável boolean
    // null e empty - valores especiais

        $funcionario1 = null;
        $funcionario2 = '';

        // valores null
        if(is_null($funcionario1)) {
            echo 'Sim, a variável está vazia';
        } else {
            echo 'Não, a variável não está vazia';
        }

        echo '<br/>';
        if(is_null($funcionario2)) {
            echo 'Sim, a variável está vazia';
        } else {
            echo 'Não, a variável não está vazia';
        }

    ?>
    
</body>
</html>