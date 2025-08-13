<?php

#4. Calculadora Simples

$num1 = readline("Digite o primeiro número: ");
$num2 = readline("Digite o segundo número: ");
$op = readline("Escolha uma operação(+,-,* e /): ");

switch ($op) {
    case "+":
        echo $num1 + $num2;
        break;
    case "-":
        echo $num1 - $num2;
        break;
    case "*":
        echo $num1 * $num2;
        break;
    case "/":
        echo $num1 / $num2;
        break;
    }