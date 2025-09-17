<?php

namespace AULA_10;

interface Movel {
    public function mover();
}

interface Abastecivel {
    public function abastecer($quantidade);
}

interface Manutenivel {
    public function manutencao();
}

class Carro implements Movel, Abastecivel {
    private $quantidade;

    public function __construct($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function mover() {
        echo "O carro está se movimentando.";
    }

    public function abastecer($quantidade) {
        echo "O carro abasteceu {$quantidade} litros.";
    }
}

class Bicicleta implements Movel, Manutenivel {
    public function mover() {
        echo "A bicicleta está pedalando.";
    }

    public function manutencao() {
        echo "A bicicleta foi lubrificada.";
    }
}

class Onibus implements Movel, Abastecivel, Manutenivel {
    private $quantidade;

    public function __construct($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function mover() {
        echo "O ônibus está transportando passageiros.";
    }

    public function abastecer($quantidade) {
        echo "O ônibus abasteceu {$quantidade} litros.";
    }

    public function manutencao() {
        echo "O ônibus está passando por revisão.";
    }
}

$carro = new Carro(20);
$bicicleta = new Bicicleta();
$onibus = new Onibus(40);

echo "\nCarro\n\n";
$carro->mover();
echo "\n";
$carro->abastecer(15);
echo "\n\n";
echo "\nBicicleta\n\n";
$bicicleta->mover();
echo "\n";
$bicicleta->manutencao();
echo "\n\n";
echo "\nÔnibus\n\n";
$onibus->mover();
echo "\n";
$onibus->abastecer(30);
echo "\n";
$onibus->manutencao();
?>