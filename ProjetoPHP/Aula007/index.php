<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condições encadeadas</title>
</head>
<body>

    <!--
        E-Commerce que oferece fretes gratuitos se o usuario possuir o cartão da loja
        E se a comprar for maior que 450 reais.
        Caso o cliente não possui o cartão da loja ele ganhará desconto nas seguintes a baixo.
        Compra a cima de 300, valor do frete 10
        Compra a cima de 100, valor do frete 25
     -->

    <?php

       $possui_cartao = true;
       $valor_compra = 450;

       $valor_frete = 50;
       $desconto_frete = true;

       if($possui_cartao || $valor_compra >= 400){
            $valor_frete = 0;

       } else if ($possui_cartao || $valor_compra >= 300) {
            $valor_frete = 10;

       } else if ($possui_cartao || $valor_compra >= 100) {
            $valor_frete = 25;

       } else {
            $desconto_frete = false;
       }
    ?>

    <h1>Detalhes do pedido</h1>

    <p>Possui cartão da loja?
       <?php
            if($possui_cartao){
                echo 'SIM';
            }else{
                echo 'Não';
            }
       ?>
    </p>

    <p>Valor da compra: <?= $valor_compra ?></p>

    <p>Recebeu desconto no frete?
       <?php
            if($possui_cartao){
                echo 'SIM';
            }else{
                echo 'Não';
            }
       ?>
    </p>

    <p>Valor do frete: <?= $valor_frete ?></p>


</body>
</html>