<?php

// Relacionamente: Sem relacionamento

class Caminho {

    public $personagem;

     public function __construct($personagem) {
        $this->personagem = $personagem;
    }

    public function chover() {
        echo "Está chovendo no caminho que {$this->personagem} trilha.\n";
    }
    public function superar() {
        echo "O {$this->personagem} conseguiu superar o caminho\n";
    }
    public function celebram() {
        echo "O {$this->personagem} celebra ao final da trilha\n";
    }
    public function comer() {
        echo "Ao acabar a trilha {$this->personagem} comemora comendo\n\n";
    }


}

$personagens = [
    new Caminho('John Snow'),
    new Caminho('Papai Smurf'),
    new Caminho('Deadpool'),
    new Caminho('Dexter')
];

foreach ($personagens as $indice => $personagem) {
    if($indice == 0) {
    echo "\n\n---------------------------- John Snow ----------------------------\n";
        echo $personagem->chover();
        echo $personagem->superar();
        echo $personagem->celebram();
        echo $personagem->comer();
    } elseif ($indice == 1) {
        echo "\n\n---------------------------- Papai Smurf ----------------------------\n";
        echo $personagem->chover();
        echo $personagem->superar();
        echo $personagem->celebram();
        echo $personagem->comer();
    } elseif ($indice == 2) {
        echo "\n\n---------------------------- Deadpool ----------------------------\n";
        echo $personagem->chover();
        echo $personagem->superar();
        echo $personagem->celebram();
        echo $personagem->comer();
    } elseif ($indice == 3) {
        echo "\n\n---------------------------- Dexter ----------------------------\n";
        echo $personagem->chover();
        echo $personagem->superar();
        echo $personagem->celebram();
        echo $personagem->comer();
    } 
}