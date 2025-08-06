<?php
    /* Exercício 4: Crie um algoritmo que calcule a média entre 2 notas e fale se o aluno foi aprovado ou reprovado. Considere a média 7 como nota de corte.
    */

    echo "Resultado da Prova\n";

    echo "Digite a primeira nota: \n";
    $nota1 = trim(fgets(STDIN));
    echo "Digite a segunda nota: \n";
    $nota2 = trim(fgets(STDIN));
    echo "Digite a porcentagem de frequência: (75)\n";
    $presenca = trim(fgets(STDIN)); 

    $media = ($nota1 + $nota2) / 2;

    if ($media >= 7 && $presenca >= 75) {
        echo "A aluno aprovado";
        echo "\nMédia: $media";
        echo "\nFrequência: $presenca%";
    } else if ($media >= 7 && $presenca < 75) {
        echo "O aluno foi reprovado por conta de faltas";
        echo "\nMédia: $media";
        echo "\nFrequência: $presenca%";
    } else if ($media <7 && $presenca >= 75) {
        echo "O aluno foi reprovado por conta de nota";
        echo "\nMédia: $media";
        echo "\nFrequência: $presenca%";
    } else {
        echo "O aluno foi reprovado";
        echo "\nMédia: $media";
        echo "\nFrequência: $presenca%";
}