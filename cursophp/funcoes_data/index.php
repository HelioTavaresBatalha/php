<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datas</title>
</head>
<body>
    <h1>Funções nativas para manipular datas</h1>
        <p>
            <?php 
                /*
                echo date('d/m/Y H:i');
                 
                echo '<hr/>';
                echo date_default_timezone_get();
                echo date_default_timezone_set('Europe/Lisbon');
                echo '<hr/>';
                echo date('d/m/Y H:i');
                */

                $data_inicial = '2018-04-24';
                $data_final = '2018-05-15'; 

                // timestamp : para converter as datas
                //01/01/1970 , data marcada pelo inicio da era unix

                $time_inicial = strtotime($data_inicial);
                $time_final = strtotime($data_final);

                echo $data_inicial . ' - ' . $time_inicial;
                echo '<br/>';
                echo $data_final . ' - ' . $time_final;
                
                echo '<hr/>';

                $diferenca_times = $time_final - $time_inicial;
                echo 'A diferença entre a data inicial  e data final é: ' . $diferenca_times;
                echo '<hr/>';
                
                $segundos_existem_dia = 24 * 60 * 60;
                echo '<br/>';
                echo " um dia possui $segundos_existem_dia segundos";
                echo '<hr/>';

                echo '<br/>';
                echo 'A diferença em dias é : '.$diferenca_times /  $segundos_existem_dia.'dias'; 

            ?>
        </p>
    
</body>
</html>