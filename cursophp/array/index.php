<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Estudo de array</h1>
        <?php 
        /*
        // Como funciona os Arrays

            $list_frutas = ['Banana', 'Maçã' ,'Morango' , 'Uva' , 'Abacate'];
            $list_frutas [] = 'Abacaxi';

            echo'<pre>';
                echo '<br/>';
                    print_r($list_frutas);
            echo'</pre>';
        */

        # Alteração dos indices dos Arrays ['A'=> 'Banana']

        $list_frutas = ['A'=> 'Banana', 'B'=>'Maçã' ,'C'=>'Morango' ,'D'=> 'Uva' ,'E'=> 'Abacate'];

        $list_frutas ['W']= 'Abacaxi';
                echo'<pre>';
                    echo '<br/>';
                        print_r($list_frutas);
                echo'</pre>';

                echo  $list_frutas ['D'];

        ?>
    
</body>
</html>