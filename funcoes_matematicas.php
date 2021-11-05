<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Curso PHP</title>
    </head>

    <body>
        <?php
        
        $num = 7.3;

        echo ceil($num); //arredonda o valor para cima
        echo floor($num); //arredonda o valor para baixo
        echo round($num); //arredonda o valor de acordo com a fração
        echo rand(0, 20); //gera um valor aleatório de 0 a randmax (sem parametros)
        echo sqrt($num); //retorna a raiz quadrada do numero 

        ?>
    </body>
</html>
