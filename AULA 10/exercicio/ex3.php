<?php

// Exercício 3 – Meios de Transporte
// Crie uma classe abstrata `Transporte` com o método `mover()`. Implemente as classes:

// - `Carro` → "O carro está andando na estrada",
// - `Barco` → "O barco está navegando no mar",
// - `Avião` → "O avião está voando no céu".
// - `Elevador` → "O Elevador está correndo pelo no prédio".

interface Veiculos {
    public function mover();
}

class Carro implements Veiculos {
    public function mover() {
        echo " - O carro está voando";
    }
}

class Aviao implements Veiculos {
    public function mover() {
        echo " - O avião está nadando";
    }
}

class Barco implements Veiculos {
    public function mover() {
        echo " - O barco está andando";
    }
}

class Elevador implements Veiculos {
    public function mover() {
        echo " - O elavador está em translação";
    }
}

$carro = new Carro();
$aviao = new Aviao();
$barco = new Barco();
$elevador = new Elevador();

$carro->mover();
echo "\n";
$aviao->mover();
echo "\n";
$barco->mover();
echo "\n";
$elevador->mover();
?>