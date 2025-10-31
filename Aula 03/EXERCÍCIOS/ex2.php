<?php
function exibirCarros($carros){

    echo "Seção Para Exibir Todos os Carros\n\n";

    foreach($carros as $index => $carros){
        echo "Carros" . ($index + 1) . ":" . $carros["modelo"] . "-" . $carros["marca"] . "-" . $carros["ano"] . "-" . ($carros["revisao"] ? "Sim" : "Nâo") . "-" . $carros["Ndonos"] . "\n";
    }
}

$carros = [
    [
        "modelo" => "varsar",
        "marca" => "nissan",
        "ano" => 2020,
        "revisao" => true,
        "Ndonos" => "12"
    ],
    [
        "modelo" => "civic",
        "marca" => "honda",
        "ano" => 2018,
        "revisao" => false,
        "Ndonos" => "5"
    ],
    [
        "modelo" => "gol",
        "marca" => "volkswagen",
        "ano" => 2015,
        "revisao" => true,
        "Ndonos" => "6"
    ],
    [
        "modelo" => "uno",
        "marca" => "fiat",
        "ano" => 2008,
        "revisao" => false,
        "Ndonos" => "1"
    ],
    [
        "modelo" => "corolla",
        "marca" => "toyota",
        "ano" => 2022,
        "revisao" => true,
        "Ndonos" => "49"
    ]
];

exibirCarros($carros);

ehSeminovo($carros);