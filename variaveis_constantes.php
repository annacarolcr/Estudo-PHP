<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Curso PHP</title>
    </head>

    <body>
        <?php

        //variaveis constantes
            define('BD_URL', 'endereco_bd_dev');
            define('BD_USUARIO', 'usuario_dev');
            define('BD_SENHA', 'senha_dev');

            echo BD_URL . '<br/>';
            echo BD_USUARIO . '<br/>';
            echo BD_SENHA . '<br/>';

            echo '<br/>';

            //exemplo if/else, comparacões e operadores lógicos 

            $usuario_possui_cartao_loja = true;
            $valor_compra = 30;

            $valor_frete = 50;
            $recebeu_desconto_frete = False;

            if($usuario_possui_cartao_loja == true && $valor_compra >= 100){
                $valor_frete = 0;
                $recebeu_desconto_frete = true;
            }
        ?>
            
            <h1>Detalhes do pedido</h1>

            <p>Possui cartão da loja? <?= $usuario_possui_cartao_loja ? 'SIM' : 'NÃO'; //operador ternario?> </p>

            <p>Possui desconto no frete? <?= $recebeu_desconto_frete ? 'SIM' : 'NÃO'; ?> </p>

            <p>Valor do frete:
                <?= $valor_compra?>
            </p>

            <p>Valor do frete:
                <?= $valor_frete?>
            </p>

            <p>Valor total:
                <?= $valor_frete + $valor_compra?>
            </p>
        
    </body>
</html>
