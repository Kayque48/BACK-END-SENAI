<?php
    // Crie uma classe Produto com os atributos privados nome, preco e
    // estoque.
    // o Implemente os setters e getters.
    // o Faça um objeto da classe e use os setters para definir os
    // valores.
    // o Exiba com os getters uma frase como:
    // O produto X custa R$ Y e possui Z unidades em estoque.

    class Produto {
        private $nome;
        private $preco;
        private $estoque;

        public function __construct($nome, $preco, $estoque) {
            $this->setNome($nome);
            $this->setPreco($preco);
            $this->setEstoque($estoque);
        }

        public function exibirInfo() {
            return "________________________________________________________________________________\n\nNome do Produto: " . $this->getNome() . "\n" . "Preço: " . $this->getPreco() . "\n" . "Quantidade no Estoque: " . $this->getEstoque() . "\n\n";
        }

        public function setNome($nome) {
            $this->nome = ucwords( strtolower($nome));
        }

        public function getNome() {
            return $this->nome;
        }

        public function setPreco($preco) {
            $this->preco = doubleval($preco);
        }

        public function getPreco() {
            return $this->preco;
        }

        public function setEstoque($estoque) {
            $this->estoque = intval($estoque);
        }

        public function getEstoque() {
            return $this->estoque;
        }
    }

    $produto1 = new Produto("Escova de dente do Sherk", 1.99, 999999999999999);
    $produto2 = new Produto("Hatsune Miku", 8.88888888, 1);
    $produto3 = new Produto("Privada Inteligente", 60.99999, 49);

    echo $produto1->exibirInfo();
    echo $produto2->exibirInfo();
    echo $produto3->exibirInfo();

?>