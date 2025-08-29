<?php

//Criação básica
// Crie uma classe chamada Carro com os atributos privados marca e
// modelo.
// o Implemente os métodos setMarca, getMarca, setModelo e getModelo.
// o Crie um objeto da classe e use os setters para atribuir valores
// e os getters para exibir os dados.

    class Carro{
        private $marca;
        private $modelo;

        public function __construct($marca, $modelo){
            $this->setMarca($marca);
            $this->setModelo($modelo);
        }

        public function exibirInfo() {
            return "Nome:" . $this->getMarca() . "\nCPF: " . $this->getModelo() . "\n\n";
        }

        public function setMarca($marca) {
            $this->marca = $marca;
        }

        public function getMarca() {
            return $this->marca;
        }

        public function setModelo($modelo) {
            $this->modelo = $modelo;
        }

        public function getModelo() {
            return $this->modelo;
        }
    }

$carro1 = new Carro("Toyota", "Corolla");
$carro2 = new Carro("Honda", "Civic");
$carro3 = new Carro("Ford", "Mustang");
$carro4 = new Carro("Chevrolet", "Camaro");

    echo $carro1->exibirInfo();
    echo $carro2->exibirInfo();
    echo $carro3->exibirInfo();
    echo $carro4->exibirInfo();

?>