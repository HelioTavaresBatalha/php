<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercico 3</title>
</head>
<body>
    <h1>Exercico 1 </h1>
    <p>Calculo da média final</p>
   <p>
    <?php
        
        $nota_1 = 7.5;
        $nota_2 = 8;
        $nota_3 = 9;

        
        $media = ($nota_1 + $nota_2 + $nota_3) / 3;

        # inteligência do calculo, decisão

        if ($media >= 9.5) {
        echo "Aluno aprovado!";
        } elseif ($media >= 8 && $media < 9.5) {
        echo "Aluno em recuperação.";
        } else {
        echo "Aluno reprovado.";
        }
    ?>
</p>

</body>
</html>