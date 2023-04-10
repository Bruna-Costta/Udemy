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
        Crie uma aplicação capaz de identificar se uma determinada pessoa pode ou não doar sangue.
        Utilize as variáveis $idade e $peso no processo. Nesse primeiro momento faça a atribuição 
        de valores as variáveis de forma estática, ou seja, no processo de atribuição.

        Se a idade informada estiver entre (e inclusive) 16 e 69 anos e o peso for igual ou superior 
        a 50kg, então o sistema deve imprimir a mensagem "Atende aos requisitos", caso contrário o 
        sistema deve imprimir a mensagem "Não atende aos requisitos".
     -->

     <?php

        $idade = 19;
        $peso = 72;

        if ( ($idade >= 16 && $idade <= 69) && $peso >= 50){

                echo "Atende aos requisitos";
        } else{
                echo "Não atende aos requisitos";
        
        }

     ?>
    
</body>
</html>