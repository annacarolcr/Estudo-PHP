<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Curso PHP</title>
    </head>

    <body>
        <?php
            $texto = 'Anna Carolina de Carvalho Rocha';

            //string to lower
            echo strtolower($texto . '</br>');

            //string to upper
            echo strtoupper($texto . '</br>');

            //upper case first
            echo ucfirst($texto . '</br>');

            //string length
            echo strlen($texto);
            echo '</br>';

            //string replace
            echo str_replace('Rocha', 'Pedra', $texto . '</br>');

            //string replace
            echo substr($texto, 0, 13) . ' ...';
        ?>
    </body>
</html>