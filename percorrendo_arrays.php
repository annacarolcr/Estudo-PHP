<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Curso PHP</title>
    </head>

    <body>
        <?php

            //Percorrendo arrays com loops
            
            $registros = [
                array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'), 
                array('titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'),  
                array('titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3')
            ];

            /*
            $idx = 0
            while($idx < count($registros)){
                echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
                echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
                echo '<hr/>';
                $idx++;
            }
            */

            for($idx = 0; $idx < count($registros); $idx++){
                echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
                echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
                echo '<hr/>';
            }

            //foreach -> percorre todos os elementos do array sem condições de parada e variáveis de controle

            $itens = ['sofá', 'cadeira', 'mesa', 'tv'];

            foreach($itens as $item){
                echo "$item "; 

                if($item == 'mesa'){
                    echo '(*Compre uma mesa e ganhe 25% de desconto na compra das cadeiras)';
                }

                echo '<br/>';
            }
            echo '<br/>';

            //Percorrendo arrays associativos com foreach

            $funcionarios = [
                ['nome' => 'João', 'salario' => 2500, 'data de nascimento' => '06/12/1998'],
                ['nome' => 'Marcela', 'salario' => 4000, 'data de nascimento' => '17/05/1996'],
                ['nome' => 'Natalia', 'salario' => 10000, 'data de nascimento' => '27/02/1988']
            ];

            foreach($funcionarios as $idx => $funcionario){
                
                foreach($funcionario as $idx2 => $valor){
                    echo "$idx2: $valor <br/>";
                }
                echo '<hr/>';
            }
        ?>
    </body>
</html>
