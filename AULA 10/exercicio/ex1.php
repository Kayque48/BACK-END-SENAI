<?php

// Exercício 1 – Formas Geométricas
// Crie uma interface `Forma` com o método `calcularArea()`. Implemente as classes:
// - `Quadrado` (lado),
// - `Retangulo` (base e altura),
// - `Circulo` (raio).
    
interface Forma {
    public function CalcularArea($valor1, $valor2 = null);
}

// Quadrado deve receber o lado e calcular a área.
class Quadrado implements Forma {
    public function CalcularArea($lado, $a = null){
        return $lado * $lado;
    }
}

class Retangulo implements Forma {
    public function CalcularArea($base, $altura = null){
        return $base * $altura;
    }
}

// Círculo deve receber o raio e calcular a área.
class Circulo implements Forma {
    public function CalcularArea($raio, $a = null){
        return pi() * ($raio * $raio);
    }
}

$square = new Quadrado();
$rectangle = new Retangulo();
$circle = new Circulo();

echo "Área do Quadrado (lado=5): " . $square->CalcularArea(5) . "\n";
echo "Área do Retângulo (base=4, altura=6): " . $rectangle->CalcularArea(4, 6) . "\n";
echo "Área do Círculo (raio=3): " . $circle->CalcularArea(3) . "\n";

?>
