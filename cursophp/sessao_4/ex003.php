<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secção 4</title>
</head>
<body>
    <h1>Resolução do exercicio 3 da seção 4</h1>
    <p>
        <?php
            
            function calculaIVA($preco) {
                $IVA = 0.23; // 23%
                $valorTotal = $preco + ($preco*$IVA); 
                return $valorTotal; 
              }
                $valorProduto = 100; 
                $valorTotal = calculaIVA($valorProduto); 
                echo "O valor total com IVA é: $valorTotal"; 
                ?>
    </p>
</body>
</html>