<?php

// Relacionamente: Realização e Herança

namespace AULA11;

interface Vida {
    public function engravidar();
    public function nascer();
    public function crescer();
    public function escolha();
    public function doar();
}

class Terra {
    private $pessoa;

    public function __construct($pessoa) {
        $this->setPessoa($pessoa);
    }

    public function setPessoa($pessoa) {
        $this->pessoa = $pessoa;
    }

    public function getPessoa() {
        return $this->pessoa;
    }
}

class Pessoa extends Terra implements Vida {
    private $idade;
    private $tipoSanguineo;

    public function __construct($pessoa, $idade, $tipoSanguineo) {
        parent::__construct($pessoa);
        $this->idade = $idade;
        $this->tipoSanguineo = $tipoSanguineo;
    }

    public function engravidar() {
        return "{$this->getPessoa()} está gerando uma nova vida na Terra.\n";
    }

    public function nascer() {
        return "{$this->getPessoa()} acabou de nascer!\n";
    }

    public function crescer() {
        return "{$this->getPessoa()} está crescendo e aprendendo sobre o mundo.\n";
    }

    public function escolha() {
        return "{$this->getPessoa()} está tomando decisões importantes na vida.\n";
    }

    public function doar() {
        return "{$this->getPessoa()} doou sangue do tipo {$this->tipoSanguineo}.\n";
    }
}

$pessoas = [
    new Pessoa("Alice", 25, "O+"),
    new Pessoa("Bruno", 32, "A-"),
    new Pessoa("Clara", 19, "B+")
];

foreach ($pessoas as $indice => $pessoa) {
    echo "\n\n---------------------------- Pessoa " . ($indice + 1) . " ----------------------------\n";
    echo $pessoa->nascer();
    echo $pessoa->crescer();
    echo $pessoa->escolha();
    echo $pessoa->doar();
    echo $pessoa->engravidar();
}
?>
