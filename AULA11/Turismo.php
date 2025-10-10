<?php

interface  Terra {
    public function Comer();
    public function Nadar();
}

class Lugar {
    private $pessoa;

    public function __construct($pessoa) {
        $this->setPessoa($pessoa);
    }

    public function setPessoa($pessoa) {
        $this->pessoa = $pessoa;
    }

    public function GetPessoa() {
        return $this->pessoa;
    }
}

class Japao extends Lugar implements Terra {

    public function __construct($pessoa) {
        parent:: __construct($pessoa);
    }
    
    public function Comer() {
        return "{$this->getPessoa()} está comendo um sushi\n";
    }

    public function Nadar() {
        return "{$this->getPessoa()} está nadando nas 温泉";
    }
}

class Brasil extends Lugar implements Terra {

    public function __construct($pessoa) {
        parent:: __construct($pessoa);
    }

    public function Comer() {
        return "{$this->getPessoa()} está comendo um pastel com um guaraná\n";
    }

    public function Nadar() {
        return "{$this->getPessoa()} está nadando no Rio Tietê";
    }
}

class Acre extends Lugar implements Terra {
    public function __construct($pessoa) {
        parent:: __construct($pessoa);
    }

    public function Comer() {
        return "{$this->getPessoa()} está comendo um ceratossaouro\n";
    }

    public function Nadar() {
        return "{$this->getPessoa()} está nadando para fujir de um T-rex";
    }
}

$pessoas = [
    New Japao('Kleber'),
    New Brasil('Joseph'),
    New Acre('Kaga Kogo')
];

foreach ($pessoas as $indice => $pessoa) {
    if($indice == 0) {
    echo "\n\n---------------------------- Japão ----------------------------\n";
        echo $pessoa->Comer();
        echo $pessoa->Nadar();
    } elseif ($indice == 1) {
        echo "\n\n---------------------------- Brasil ----------------------------\n";
        echo $pessoa->Comer();
        echo $pessoa->Nadar();
    } else {
        echo "\n\n---------------------------- Acre ----------------------------\n";
        echo $pessoa->Comer();
        echo $pessoa->Nadar();
    }
}
