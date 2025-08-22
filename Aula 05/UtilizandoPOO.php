<?php
class Carros{

    public $marca;
    public $modelo;
    public $ano;
    public $revisao;
    public $N_Donos;

    public function __construct($marca, $modelo, $ano, $revisao, $N_Donos) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->revisao = $revisao;
        $this->N_Donos = $N_Donos;
    }

    public function mostrar(): void {
        echo "\nMarca: " . $this->marca . "\n";
        echo "Modelo: " . $this->modelo . "\n";
        echo "Ano: " . $this->ano . "\n";
        echo "Revisão : " . ($this->revisao ? "Sim" : "Não") . "\n";
        echo "Números de Donos: " . $this->N_Donos . "\n\n";
    }

    public function ligar(): void{
        echo "O carro {$this->modelo} está ligado!\n";
    }

}

$carro1 = new Carros("Porsche", "911", "2020", false, 3);

$carro2 = new Carros("Mitsubishi", "Lancer", 1945, true, 1);

// Exercício: Crie mais 4 novos objetos para a classe carro
$carro3 = new Carros("Ferrari", "F40", 1992, true, 5);

$carro4 = new Carros("Chevrolet", "Camaro", 2018, false, 2);

$carro5 = new Carros("Volkswagen", "Fusca", 1976, true, 8);

$carro6 = new Carros("Toyota", "Corolla", 2022, false, 1);

$carro1->mostrar();
$carro2->mostrar();
$carro3->mostrar();
$carro4->mostrar();
$carro5->mostrar();
$carro6->mostrar();
?>z]