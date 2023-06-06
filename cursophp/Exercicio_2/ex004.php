<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Práticando array</h1>
    <h3>Resolução do exercicio 4</h3>

    <?php

        $a = array("a" => "maçã", "b" => "banana");
        $b = array("a" => "kiwi", "b" => "ananás", "c" => "morango");

        # Mostrar a junção de $a e $b
        $uniaoAB = array_merge($a, $b);
        print_r($uniaoAB);
        echo "<br>";

        # Mostrar a junção de $b e $a
        $uniaoBA = array_merge($b, $a);
        print_r($uniaoBA);
    ?>   
</body>
</html>