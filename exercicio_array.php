<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Curso PHP</title>
    </head>

    <body>
        <?php
           
           $lista_numeros = [];

           while(count($lista_numeros) <= 5){
               
                $numero = rand(1, 60);

                if(!in_array($numero, $lista_numeros)){
                    $lista_numeros[] = $numero;
                }
           }
            echo '<pre>';
                print_r($lista_numeros);
            echo '</pre>';

        ?>
    </body>
</html>
