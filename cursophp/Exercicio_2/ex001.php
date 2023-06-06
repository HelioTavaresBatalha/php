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
    <h2>Resolução do exercicio 1 </h2>
    
    <?php

        $pais = "Portugal";
        # O quarto e quinto caracter
        $quartoCaracter = $pais[3];
        $quintoCaracter = $pais[4];

        echo "O quarto caracter é: " . $quartoCaracter . "<br>";
        echo '<hr/>';
        echo "O quinto caracter é: " . $quintoCaracter . "<br>";
        echo '<hr/>';

        # quantidade de caracteres
        $quantidadeCaracteres = strlen($pais);
        echo "A quantidade de caracteres é: " . $quantidadeCaracteres . "<br>";
        echo '<hr/>';

        # Converter para maiúsculas
        $paisMaiusculo = strtoupper($pais);
        echo "Convertido para maiúsculas: " . $paisMaiusculo . "<br>";
        ?> 
</body>
</html>