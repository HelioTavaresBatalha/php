<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <h1>Funções nativas para manipular string</h1>
    <h3>Práticando strtolower</h3>
        <?php 
        $texto = 'Helio Domingos Tavares Batalha';
        #Declaração da variável
        echo $texto;
        echo'<br/>';

        #FUNÇÃO STRTOLOWER
        echo strtolower($texto);
        echo'<hr/>';

        #FUNÇÃO STRTOUPPER
        echo $texto;
        echo '<br/>';
        echo strtoupper($texto);
        echo'<hr/>';

        #FUNÇÃO UCFIRST
        echo $texto;
        echo '<br/>';
        echo ucfirst($texto);
        echo'<hr/>';

        #FUNÇÃO STRLEN
        echo $texto;
        echo '<br/>';
        echo strlen($texto);
        echo'<hr/>';

        #FUNÇÃO STR_REPLACE
        echo $texto;
        echo '<br/>';
        echo str_replace('Helio','Humberto',$texto);

        //'Helio Domingos Tavares Batalha';
        echo '<hr/>';
        #FUNÇÃO SUBSTR
        echo $texto;
        echo '<br/>';
        echo substr($texto,6,9);

        
        ?>
    
</body>
</html>