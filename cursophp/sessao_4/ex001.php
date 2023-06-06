<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secção 4</title>
</head>
<body>
    <h1>Resolução do exercicio 1 da seção 4</h1>
    <p>
        <?php 
            
            $A = 10;
            $B = 5;
            $C = 3;
            $D = 4;   
            $soma = $A + $C; 
            $multiplicacao = $B * $D;
            // Verificação da condição.
                if ($soma > $multiplicacao) {
                    echo "A+C é maior que B*D";
                } elseif ($soma < $multiplicacao) {
                    echo "A+C é menor que B*D";
                } else {
                    echo "A+C é igual a B*D";
                }         
        ?>
    </p>
</body>
</html>