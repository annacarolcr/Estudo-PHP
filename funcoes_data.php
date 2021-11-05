<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Curso PHP</title>
    </head>

    <body>
        <?php
            /*
            echo date_default_timezone_get(); //recupera o timezone default da aplicação
            date_default_timezone_set('America/Sao_Paulo');//atualiza o timezone default da aplicação
            echo date('d/m/Y H:i'); //recupera a data atual/corrente
            */

            $data_inicio = '2021-11-01';
            $data_final = '2021-11-04';

            $time_inicial = strtotime($data_inicio); //transforma datas textuais em segundos
            $time_final = strtotime($data_final);

            $diferenca_times = $time_final - $time_inicial;

            $quantidade_segundos_dia = 24 * 60 * 60;

            $diferenca_datas = $diferenca_times / $quantidade_segundos_dia;

            echo $diferenca_datas;

        ?>
    </body>
</html>
