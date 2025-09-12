<?php


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