<?php 

// 7. Números Pares

$numb = readline("Digite o número final: ");
$par = 0;

for ($i = 0; $i <= $numb; $i++) {
    if ($i %2== 0) {
        echo "$i \n";
    }
}