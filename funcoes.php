<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Curso PHP</title>
    </head>

    <body>
        <?php

            //funcao void (sem retorno)
            function exibirBoasVindas(){
                echo 'Bem-vindo ao curso de PHP! </br>';
            }

            exibirBoasVindas();

            //funcao return (com retorno)
            function calcularAreaTerreno($largura, $comprimento){
                $area = $largura * $comprimento;
                return $area;
            }

            echo calcularAreaTerreno(30, 50);
            echo '</br>';

            //atividade
            function calcularImpostoDeRenda($salario){

                if($salario <= 1903.98){
                    $valorImposto = 'isento';

                }elseif($salario >= 1903.99 && $salario <= 2826.65){
                    $valorImposto = $salario*0.075;

                }elseif($salario >= 2826.66 && $salario <= 3751.05){
                    $valorImposto = $salario*0.15;

                }elseif($salario >= 3751.06 && $salario <= 4664.68){
                    $valorImposto = $salario*0.225;

                }else{
                    $valorImposto = $salario*0.275;
                }

                return $valorImposto;
            }

            echo calcularImpostoDeRenda(4664.68);
        ?>
    </body>
</html>