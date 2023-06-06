<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matemática</title>
</head>
<body>
    <h1>Funções nativas matemática</h1>

        <?php
            $num = 5.5;
         
            // Função ceil, arredonda qualquer valor para cima.
            echo 'Esta é a função ceil';
            echo '<br/>';
            echo ceil($num);
            echo '<hr/>';

            // Função floor, arredonda qualquer valor para baixo.
            echo 'Esta é a função Floor';
            echo '<br/>';
            echo floor($num);
            echo '<hr/>';

            // Função Round, arredonda os valores com base nas casa decimais.
            echo 'Esta é a função Round';
            echo '<br/>';
            echo round($num);
            echo '<hr/>';

            // Função Rand: gera um numero inteiro ateatório, entre os intervalos indicado por EX" 10 e 20".
            echo 'Esta é a função Rand';
            echo '<br/>';
            echo rand(1,20);
            echo '<hr/>';

            // Função sqrt, gera a raiz quadrada de um número.
            echo 'Esta é a função sqrt';
            echo '<br/>';
            echo sqrt(25);
            echo '<hr/>';
        ?>   
</body>
</html>