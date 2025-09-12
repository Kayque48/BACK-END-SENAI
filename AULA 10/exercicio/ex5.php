<?php

// Exercício 5 – Calculadora com Sobrecarga Simulada
// Crie uma classe `Calculadora` com o método `somar()`.
// - Se receber 2 números, retorna a soma dos dois.
// - Se receber 3 números, retorna a soma dos três.

class Calculadora {
    public function somar(...$numeros) {
        return array_sum($numeros);
    }
}

$calc = new Calculadora();

echo "Soma de 2 números (5 + 10): " . $calc->somar(5, 10) . "\n";
echo "Soma de 3 números (2 + 4 + 6): " . $calc->somar(2, 4, 6) . "\n";
echo "Soma de vários números (1 + 2 + 3 + 4 + 5): " . $calc->somar(1, 2, 3, 4, 5) . "\n";
?>