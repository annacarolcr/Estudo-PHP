<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Curso PHP</title>
    </head>

    <body>
        <?php
            //arrays sequenciais (numéricos)
            //$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');
            $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];
            $lista_frutas[] = 'Abacaxi';

            echo('<pre>');
            var_dump($lista_frutas);
            echo('</pre>');
            echo('<pre>');
            print_r($lista_frutas);
            echo('</pre>');

            //arrays associativos
            $lista_cores = array(
                'a' => 'vermelho', 
                'b' => 'azul', 
                'c' => 'rosa', 
                'd' => 'amarelo'
            );

            $lista_cores['e'] = 'verde';

            echo('<pre>');
                var_dump($lista_cores);
            echo('</pre>');
            echo('<pre>');
                print_r($lista_cores);
            echo('</pre>');

            //array multidimensional

            $lista_coisas['flores'] = array ('1' => 'rosa', '2' => 'margarida', '3' =>'violeta', '4' =>'orquídea');
            $lista_coisas['pessoas'] = array('1' => 'João', '2' => 'Maria', '3' => 'Roberta', '4' => 'Larisso');

            echo('<pre>');
                var_dump($lista_coisas);
            echo('</pre>');
            echo('<pre>');
                print_r($lista_coisas);
            echo('</pre>');

            echo $lista_coisas['flores'][3];
            echo $lista_coisas['pessoas'][2];
        ?>
    </body>
</html>
