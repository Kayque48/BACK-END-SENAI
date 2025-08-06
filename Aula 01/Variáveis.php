<?php

    echo "Olá! \n";
    $nome = "Kayque! \n";
    $idade = "19";
    $ano_atual = "2025";

    $data_nasc = $ano_atual - $idade;
    echo $nome, "você Nasceu em: ", $data_nasc;

    /* 2. Dado uma Frase "Programação em php." transformá-la em maiúscula, imprima, depois em minúscula e imprima de novo. */
    $exerc2 = "Programaação em php";
    echo "\nMinúsculo: ", $exerc2;
    $exerc2 = strtoupper(string: $exerc2);
    echo "\nMaiúsculo: ", $exerc2;
    $exerc2 = strtolower(string: $exerc2);
    echo "\nMinúsculo novamente: ", $exerc2;

    /* 3. Numa dada frase " O PHP foi criado em mil novecentos e noventa e cinco".
    -Trocar o "O" (letra) por 0(zero), o "a" por "4" e o "i" por "1".
    */

    $exerc3 = "O PHP foi criado em mil novecentos e noventa e cinco";
    echo "\nAntes de comando replace: \n", $exerc3;
    $exerc3 = str_replace(search: ['O', 'a', 'i'], replace: ['0', '4', '1'], subject: $exerc3);
    echo "\nApós o comando replace: \n", $exerc3;

?>