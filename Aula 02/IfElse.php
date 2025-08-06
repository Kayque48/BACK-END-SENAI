<?php
/* Exercício 4: Crie um algoritmo que calcule a média entre 2 notas e fale se o aluno foi aprovado ou reprovado. Considere a média 7 como nota de corte.
*/

echo "Resultado da Prova\n";

$nome = "Enzo Enrico";
$nota1 = 0;
$nota2 = 0;
$presenca = 0;

$media = ($nota1 + $nota2) / 2;

if ($nome == "Enzo Enrico") {
    echo "O aluno foi aprovado automaticamente por ser Enzo Enrico";
    echo "\nMédia: $media";
    echo "\nFrequência: $presenca%";
} else if ($media >= 7 && $presenca >= 75) {
    echo "O aluno foi aprovado";
    echo "\nMédia: $media";
    echo "\nFrequência: $presenca%";
} else if ($media >= 7 && $presenca < 75) {
    echo "O aluno foi reprovado por conta de faltas";
    echo "\nMédia: $media";
    echo "\nFrequência: $presenca%";
} else if ($media < 7 && $presenca >= 75) {
    echo "O aluno foi reprovado por conta de nota";
    echo "\nMédia: $media";
    echo "\nFrequência: $presenca%";
} else {
    echo "O aluno foi reprovado";
    echo "\nMédia: $media";
    echo "\nFrequência: $presenca%";
}