<?php

// Exercício extra

$val = readline("Digite o primeiro valor: ");
$val2 = readline("Digite o primeiro valor: ");

if (is_numeric($val)) {
    $val = (float) $val;
}

if (is_numeric($val2)) {
    $val2 = (float) $val2;
}

if (gettype($val) == gettype($val2)) {
    echo "Variáveis de tipos iguais! Primeiro valor do tipo ", gettype($val), " e segundo valor do tipo ", gettype($val2), ".";
} else {
    echo "ERRO! Variáveis de tipos diferentes. Primeiro valor do tipo ", gettype($val), " e segundo valor do tipo ", gettype($val2), ".";
}