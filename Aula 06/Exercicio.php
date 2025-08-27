<?php

class Produtos{

    public int $id;
    public string $nome;
    public string $categoria;
    public float $valor;

    public function __construct($id, $nome, $categoria, $valor) {
        $this->id = $id;
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->valor = $valor;
    }

    public function mostrar() {
        echo "ID: {$this->id} \nNome: {$this->nome} \nCategoria: {$this->categoria}" . "\nSexo: {$this->valor}";
    }
}

$produtos = [
    new Produtos(
        "1",
        "Peixe",
        "vivo",
        "999.12"
    ),

    new Produtos(
        "2",
        "João",
        "java",
        "1.99"
    ),

    new Produtos(
        "3",
        "java",
        "linguagem",
        "184894.215684"
    )
];

foreach ($produtos as $produto) {
    $produto->mostrar();
}
