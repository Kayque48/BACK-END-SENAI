<?php

// 8. Tabuada

$num = readline("Digite qual a tabuada desejada: ");

for ($i = 0; $i < 10; $i++) {
    echo "$num x $i = ".  $num*$i . "\n";
}