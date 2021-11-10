<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Curso PHP</title>
    </head>

    <body>
        <?php
            //in_array() retorna true (1) ou false (vazio) para o que está sendo procurado

            $lista_frutas = ['Banana', 'Maçã', 'Laranja', 'Uva'];

            echo('<pre>');
                print_r($lista_frutas);
            echo('</pre>');

            $existe =  in_array('Melão', $lista_frutas);
            
            if($existe){
                echo 'Existe no array';
            }else{
                echo 'Não existe no array';
            }

            //array_search() retorna o índice do valor procurado, caso ele exista
            // se não existir, retona null = vazio

            $valor_existe = array_search('Laranja', $lista_frutas);

            if($valor_existe != NULL){
                echo 'A fruta ' . $lista_frutas[$valor_existe] . ' existe na lista';
            }else{
                echo 'O valor não existe na lista';
            }

            //pesquisa em arrays multidimensionais

            $lista_coisas = [
                'frutas' => $lista_frutas,
                'pessoas' => ['João', 'Maria']
            ];

            echo('<pre>');
                print_r($lista_coisas);
            echo('</pre>');

            echo in_array('Maçã', $lista_coisas['frutas']);

            //Funções nativas para manipular arrays

            //is_array(array) -> verifica se o parametro é um array
            //array_keys(array) -> retorna todas as chaves de um array
            //sort(array) -> ordena um array e reajusta seus indices
            //asort(array) -> ordena um array pr3eservando os indices
            //count(array) -> conta a quantidade de elementos de um array
            //array_merge(array) -> Funde um ou mais arrays
            //explode(array) -> divide uma string baseada num delimitador
            //implode(array) -> junta elementos de um array em uma string
        ?>
    </body>
</html>
