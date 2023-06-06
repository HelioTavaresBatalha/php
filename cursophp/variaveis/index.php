<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
</head>
<body>
    <h1>Estudo de variáveis</h1>

        <?php 
            $nome = " Hélio ";
            $sobrenome = " Batalha ";
            $idade = 31;
            $peso = 90.50;

            echo " O seu Nome completo é ".$nome.$sobrenome;
    ?>

    <p>A sua idade é <?= $idade ?>anos</p>
    <p>O seu peso é <?= $peso ?>kg</p>

</body>
</html>