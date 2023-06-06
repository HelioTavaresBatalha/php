<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
</head>
<body>
    <h1>Resolução do exercicio 3</h1>
    <p>
        <?php

            $num = 5;
            
            for ($i = 1; $i <= 10; $i++) {
            $resultado = $num * $i;
            echo "$num x $i = $resultado <br>";
            }
        ?>
    </p>
    
</body>
</html>