<?php

namespace AULA_10;

interface Veiculos {
    public function mover();
}

class Carro implements Veiculos {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function mover() {
        echo " - O carro {$this->nome} está voando";
    }
}

class Aviao implements Veiculos {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function mover() {
        echo " - O avião {$this->nome} está nadando";
    }
}

class Barco implements Veiculos {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function mover() {
        echo " - O barco {$this->nome} está andando";
    }
}

class Elevador implements Veiculos {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function mover() {
        echo " - O elevador {$this->nome} está em translação";
    }
}

$carro1 =  new Carro("Cleber");
$carro2 = new Carro("Jelemias");
$aviao1 = new Aviao("Passa");
$aviao2 = new Aviao("Porta");
$barco1 = new Barco("Remo");
$barco2 = new Barco("Nemo");
$elevador1 = new Elevador("Sobe");
$elevador2 = new Elevador("Baixa");

echo "Carros Carrudus\n";
$carro1->mover();
echo "\n";
$carro2->mover();
echo "\n\n";
echo "Aviões Aviadudos\n";
$aviao1->mover();
echo "\n";
$aviao2->mover();
echo "\n\n";
echo "Barcos Barcudus\n";
$barco1->mover();
echo "\n";
$barco2->mover();
echo "\n\n";
echo "Elevador Elevadisusus e gulosos\n";
$elevador1->mover();
echo "\n";
$elevador2->mover();

?>