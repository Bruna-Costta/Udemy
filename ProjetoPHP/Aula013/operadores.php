<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de incremento e decremento</title>
</head>

<body>

    <h3>Pós-incremento</h3>
    <?php

        $a = 7;

        echo "O valor contido em A é $a <br/> <br/>";
        echo 'O valor contido em A após o incremento ' . $a++ . '<br/>';
        echo "Valor atualizado é $a";
    ?>

    <h3>Pré-incremento</h3>
    <?php

        $a = 7;

        echo "O valor contido em A é $a <br/> <br/>";
        echo 'O valor contido em A pré incremento ' . ++$a . '<br/>';
        echo "Valor atualizado é $a <hr/>";
    ?>

    <h3>Pós-decremento</h3>
    <?php

        $a = 7;

        echo "O valor contido em A é $a <br/> <br/>";
        echo 'O valor contido em A após o decremento ' . $a-- . '<br/>';
        echo "Valor atualizado é $a";
    ?>

    <h3>Pré-decremento</h3>
    <?php

        $a = 7;

        echo "O valor contido em A é $a <br/> <br/>";
        echo 'O valor contido em A pré decremento ' . --$a . '<br/>';
        echo "Valor atualizado é $a";
    ?>

</body>

</html>