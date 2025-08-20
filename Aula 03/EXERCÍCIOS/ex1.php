<?php
// 📌 Exercício 1 – Função para exibir dados do carro
function exibirCarros($carros) {
    echo "Seção Para Exibir Todos os Carros\n\n";

    foreach ($carros as $index => $carro) {
        echo "Carro " . ($index + 1) . ":\n";
        echo " - Modelo: " . $carro["modelo"] . "\n";
        echo " - Marca: " . $carro["marca"] . "\n";
        echo " - Ano: " . $carro["ano"] . "\n";
        echo " - Revisão: " . ($carro["revisao"] ? "Sim" : "Não") . "\n";
        echo " - Número de Donos: " . $carro["Ndonos"] . "\n";
        echo " - Preço Estimado: R$ " . number_format($carro["preco"], 2, ",", ".") . "\n\n";
    }
}

// 📌 Exercício 2 – Função que verifica se o carro é seminovo
function ehSeminovo($carros) {
    echo "\n\nSeção para Conferir se o Carro é Semi-Novo\n\n";

    $anoAtual = date("Y");

    foreach ($carros as $index => $carro) {
        echo "Carro " . ($index + 1) . ":\n";
        echo " - Modelo: " . $carro["modelo"] . "\n";
        echo " - Marca: " . $carro["marca"] . "\n";
        echo " - É seminovo? " . ($carro["ano"] <= ($anoAtual - 3) ? "Sim" : "Não") . "\n\n";
    }
}

// 📌 Exercício 3 – Função que verifica necessidade de revisão
function precisaRevisao($carros) {
    echo "\n\nSeção para Conferir se Carro Precisa de Revisão\n\n";

    foreach ($carros as $index => $carro) {
        echo "Carro " . ($index + 1) . ":\n";
        echo " - Modelo: " . $carro["modelo"] . "\n";
        echo " - Marca: " . $carro["marca"] . "\n";
        echo " - Ano: " . $carro["ano"] . "\n";
        echo " - Situação: " . ($carro["revisao"] ? "Precisa de revisão" : "Revisão em dia") . "\n\n";
    }
}

// 📌 Exercício 4 – Função que calcula valor estimado
function calcularValor($carro) {
    // Preço base de acordo com a marca
    switch (strtolower($carro["marca"])) {
        case "bmw":
        case "porsche":
            $preco = 300000;
            break;
        case "nissan":
            $preco = 70000;
            break;
        case "byd":
            $preco = 150000;
            break;
        default:
            $preco = 50000; // valor padrão para outras marcas
            break;
    }

    // Desconto por donos adicionais
    $numDonos = intval($carro["Ndonos"]);
    if ($numDonos > 1) {
        $preco -= $preco * 0.05 * ($numDonos - 1);
    }

    // Desconto por ano de uso
    $anoAtual = date("Y");
    $anosUso = $anoAtual - intval($carro["ano"]);
    $preco -= $anosUso * 3000;

    return max($preco, 0);
}

$carros = [
    ["modelo" => "X5", "marca" => "BMW", "ano" => 2022, "revisao" => true, "Ndonos" => "1"],
    ["modelo" => "911 GT3", "marca" => "Porsche", "ano" => 2020, "revisao" => false, "Ndonos" => "2"],
    ["modelo" => "Sentra", "marca" => "Nissan", "ano" => 2018, "revisao" => true, "Ndonos" => "3"],
    ["modelo" => "Han", "marca" => "BYD", "ano" => 2021, "revisao" => false, "Ndonos" => "1"],
    ["modelo" => "Corolla", "marca" => "Toyota", "ano" => 2019, "revisao" => true, "Ndonos" => "2"],
    ["modelo" => "Versa", "marca" => "Nissan", "ano" => 2015, "revisao" => true, "Ndonos" => "4"]
];


foreach ($carros as $index => $carro) {
    $carros[$index]["preco"] = calcularValor($carro);
}

// Executando funções
exibirCarros($carros);
ehSeminovo($carros);
precisaRevisao($carros);
