<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha 1 </title>
</head>
<body>
    <h1>Ficha de exercicio 1</h1>
    <h3>Exercicio 2</h3>
    <p>
        <?php   
            
            $nota_1 = 16;
            $nota_2 = 19;
            $nota_3 = 20;
            
            echo " A <strong>média</strong> aritimética  $nota_1 , $nota_2, $nota_3:  é <br/> <hr> " .number_format($nota_1 + $nota_2 + $nota_3) / 3 .' valores ';   
        ?> 
    </p>   
</body>
</html>