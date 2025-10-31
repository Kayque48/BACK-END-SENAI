<?php
    // Crie uma classe Funcionario com os atributos privados nome e salario.
    // o Crie métodos setNome, getNome, setSalario e getSalario.
    // o Defina os valores de um funcionário com os setters.
    // o Depois, altere o nome e o salário usando novamente os
    // setters.
    // o Mostre, com os getters, que os valores realmente foram
    // modificados.

    class Funcionario {
        private $nome;
        private $salario;

        public function __construct($nome, $salario) {
            $this->setNome($nome);
            $this->setSalario($salario);
        }

        public function exibirInfo() {
            return "_____________________________________________________\n\nFuncionário: " . $this->nome . "\n" . "Salário: " . $this->salario . "\n\n_____________________________________________________\n";
        }

        public function setNome($nome) {
            $this->nome = ucwords(strtolower($nome));
        }

        public function getNome() {
            return $this->nome;
        }

        public function setSalario($salario) {
            $this->salario = doubleval($salario);
        }
    }

    $func = new Funcionario("Armando", 1925.80);

    echo "\nSalário Antes da Alteração\n";
    echo $func->exibirInfo();

    $func->setSalario(2349.60);

    echo "\n\nSalário Após Alteração\n\n";
    echo $func->exibirInfo();
?>