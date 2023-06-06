<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práticando if else</title>
</head>
<body>
    <h1>Práticando if else mais um pouco</h1>
        <?php 
            $usuarioPossuiCartaoLoja = true;
            $valorCompra = 99;

            $valorFrete = 50;
            $recebeuDescontoFrete = false;

            if($usuarioPossuiCartaoLoja || $valorCompra >= 100){
                $valorFrete = 0;
                $recebeuDescontoFrete = true;
            }
        ?>
        <h1>Detalhes do pedido</h1>

        <p>Possui o cartão da loja?
            <?php 

                if($usuarioPossuiCartaoLoja){
                    echo 'SIM';
                } else{
                    echo 'NAO';
                }
            ?>
        </p>
        <p>Valor da compra: <?= $valorCompra ?></p>

        
        
    
</body>
</html>