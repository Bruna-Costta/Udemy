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
        Crie uma função para calcular o imposto de renda a ser pago com base em um salario 
        passando por parâmetro.

        Até 1.903,98 = insento
        De R$ 1.903,99 até R$ 2.826,65 = 7,5%
        De R$ 2.826,66 até R$ 3.751,05 = 15%
        De R$ 3.751,06 até R$ 4.664,68 = 22,5%
        Acima de R$ 4664,68  = 27,5%
     -->

     <?php

        function calcularIRPF($salario){
            $imposto = 0;

            if ($salario <= 1903.98) {
                $imposto = 0;

            } else if($salario >= 1903.99 && $salario <= 2826.65){
                $imposto = ($salario * 7.5) / 100;

            } else if ($salario >= 2826.67 && $salario <= 3751.05){
                $imposto = ($salario * 15) / 100;

            } else if ($salario >= 3751.05 && $salario <= 4664.08){
                $imposto = ($salario * 22.5) / 100;

            } else{
                $imposto = ($salario * 27.5) / 100;
            }
            return $imposto;
        }

        // imprime o retorno da função passando o salário por parâmetro

        echo calcularIRPF(5000);

     ?>

    
</body>
</html>