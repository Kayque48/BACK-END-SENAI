<?php
    echo "Bem Vindo ao Calculador de Lucro da Venda de Pão";


    $materia_prima = ["farinha", "fermento", "açúcar", "sal", "água"];
    $valor_custo = [];




    function custos($materia_prima, $valor) {


        foreach ($materia_prima as $item) {
            $valor = readline("Digite o valor para $item: ");
            $valor[$item] = (float)$valor;

        }

        return array_sum($valor);
    }

    function ganhos() {
        $clintes = readline;
    }
?>