<?php

interface Cinema {
    public function comprarIngresso();
    public function assistirFilme();
}

class Cliente {
    private $nome;

    public function __construct($nome) {
        $this->setNome($nome);
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }
}

class Adulto extends Cliente implements Cinema {

    public function __construct($nome) {
        parent::__construct($nome);
    }

    public function comprarIngresso() {
        return "{$this->getNome()} comprou um ingresso para um filme de ação.\n";
    }

    public function assistirFilme() {
        return "{$this->getNome()} está assistindo 'Missão Impossível'.\n";
    }
}

class Crianca extends Cliente implements Cinema {

    public function __construct($nome) {
        parent::__construct($nome);
    }

    public function comprarIngresso() {
        return "{$this->getNome()} comprou um ingresso para um filme infantil.\n";
    }

    public function assistirFilme() {
        return "{$this->getNome()} está assistindo 'Divertidamente 2'.\n";
    }
}

$clientes = [
    new Adulto('Carlos'),
    new Crianca('Luna')
];

foreach ($clientes as $indice => $cliente) {
    if ($indice == 0) {
        echo "\n\n---------------------------- Adulto ----------------------------\n";
        echo $cliente->comprarIngresso();
        echo $cliente->assistirFilme();
    } else {
        echo "\n\n---------------------------- Criança ----------------------------\n";
        echo $cliente->comprarIngresso();
        echo $cliente->assistirFilme();
    }
}
?>
