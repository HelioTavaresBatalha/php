<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
    <h1>Manipulação de string</h1>
    <h2>Resolução do exercicio 2 </h2>
    <?php

        $frase = "Estou a frequentar o curso de PHP na Associação";
        $fraseNova = str_replace("Associação", "ANPRI", $frase);
        echo $fraseNova;
        ?>   
</body>
</html>