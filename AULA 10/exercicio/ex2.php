<?php

// Exercício 2 – Animais e Sons
// Crie uma classe pai `Animal` com o método `fazerSom()`. Implemente as classes:
// - `Cachorro` → "Au au!",
// - `Gato` → "Miau!",
// - `Vaca` → "Muuu!".


class Animal {
    public function fazerSom() : string {
        return "Som genérico de animal";
    }
}   

// Classe Cachorro
class Cachorro extends Animal {
    public function fazerSom() : string {
        return "Au au!";
    }
}

// Classe Gato
class Gato extends Animal {
    public function fazerSom() : string {
        return "Miau!";
    }
}

// Classe Vaca
class Vaca extends Animal {
    public function fazerSom() : string {
        return "Muuu!";
    }
}

// Testando
$dog = new Cachorro();
$cat = new Gato();
$cow = new Vaca();

echo "Cachorro: " . $dog->fazerSom() . "\n";
echo "Gato: " . $cat->fazerSom() . "\n";
echo "Vaca: " . $cow->fazerSom() . "\n";

?>
