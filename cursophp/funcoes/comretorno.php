<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <h1>Estudo de funções</h1>
    <h3>Com retorno</h3>

    <p>
        <?php

            function calcularAreaTerreno($comprimento,$largura){
                $area = $comprimento * $largura;
                return $area;
            }
               $resultado = calcularAreaTerreno(30,20);
                echo $resultado;
        ?>

    </p>
    
</body>
</html>