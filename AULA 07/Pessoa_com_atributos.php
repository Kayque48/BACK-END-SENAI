<?php

// Crie uma classe Pessoa com os atributos privados nome, idade e email.
// o Utilize os setters para preencher os dados de uma pessoa.
// o Em seguida, use os getters para exibir as informações dessa
// pessoa em formato de frase, por exemplo:
// O nome é Samuel, tem 22 anos e o email é samuel@exemplo.com.

    class Pessoas {
        private $nome;
        private $idade;
        private $email;

        public function __construct($nome, $idade, $email) {
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setEmail($email);
        }

        public function exibirInfo() {
            return "O nome é " . $this->getNome() . ", " . "tem " . $this->getIdade() . " e o email é " . $this->getEmail() . "\n";
        }

        public function setNome($nome) {
            $this->nome = ucwords(string: strtolower($nome));
        }

        public function getNome() {
            return $this->nome;
        }

        public function setIdade($idade) {
            $this->idade = abs((int)$idade);
        }

        public function getIdade(){
            return $this->idade;
        }

        public function setEmail($email) {
            $this->email = trim($email);
        }

        public function getEmail() {
            return $this->email;
        }
    }

    $pessoa1 = new Pessoas("Beto", "49", "BetoReiDelas123@gmail.com");
    $pessoa2 = new Pessoas("Gertrudi", "14", "GertrudiMatosSantos@gmail.com");
    $pessoa3 = new Pessoas("hosvaldo", "19", "HosvaldoSoCapakk@gmail.com");

    echo $pessoa1->exibirInfo();
    echo $pessoa2->exibirInfo();
    echo $pessoa3->exibirInfo();

?>