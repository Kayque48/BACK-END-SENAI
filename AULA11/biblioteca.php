<?php

interface Biblioteca {
    public function emprestarLivro();
    public function emprestarRevista();
}

class Usuario {
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

class Aluno extends Usuario implements Biblioteca {

    public function __construct($nome) {
        parent::__construct($nome);
    }

    public function emprestarLivro() {
        return "{$this->getNome()} pegou um livro de programação emprestado.\n";
    }

    public function emprestarRevista() {
        return "{$this->getNome()} pegou uma revista científica emprestada.\n";
    }
}

class Professor extends Usuario implements Biblioteca {

    public function __construct($nome) {
        parent::__construct($nome);
    }

    public function emprestarLivro() {
        return "{$this->getNome()} pegou um livro de metodologia emprestado.\n";
    }

    public function emprestarRevista() {
        return "{$this->getNome()} pegou uma revista de pesquisa emprestada.\n";
    }
}

$usuarios = [
    new Aluno('Maria'),
    new Professor('Dr. João')
];

foreach ($usuarios as $indice => $usuario) {
    if ($indice == 0) {
        echo "\n\n---------------------------- Aluno ----------------------------\n";
        echo $usuario->emprestarLivro();
        echo $usuario->emprestarRevista();
    } else {
        echo "\n\n---------------------------- Professor ----------------------------\n";
        echo $usuario->emprestarLivro();
        echo $usuario->emprestarRevista();
    }
}
?>
