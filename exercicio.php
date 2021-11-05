<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Curso PHP</title>
    </head>

    <body>
        <?php
            $idade = 70;
            $peso = 15;

            if(($idade >= 16 && $idade <= 69) && $peso >= 50){
                echo 'Atende aos requisitos';
            }else{
                echo 'Não atende aos requisitos';
            }
        ?> 
    </body>
</html>
