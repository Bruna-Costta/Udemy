<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>

    <?php

        //void (sem retorno)
        function boasVindas() {
            echo 'Bem-vindo! <br/>';
        }

        boasVindas();

        //return (com retorno)
        function calcularArea($largura, $comprimento) {
            $area = $largura * $comprimento;
            return $area;
        }

        $resultado = calcularArea(5,25);
        echo $resultado;

    ?>
    
</body>
</html>