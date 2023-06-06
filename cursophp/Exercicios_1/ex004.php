<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha 1</title>
</head>
<body>
    <h1>Resoluçaõ de ficha 1 </h1>
    <h3>Exercicio 4</h3>

        <?php 
            define('IVA', 23);
            $reparacaoCarro = 78;

            echo " O valor da reparação sem  iva é <strong> $reparacaoCarro </strong>, após o calculo do   IVA o valor final é: " .($reparacaoCarro * 0.23)+ $reparacaoCarro; echo '€';
        ?>
    
</body>
</html>