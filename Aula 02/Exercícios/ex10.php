<?php 

// 10. Menu Interativo

for ($i = 0; $i < 5; $i++) {
    $op = readline("1-Olá \n2-Data Atual \n3-Sair\n\n");

    switch($op) {
        case 3:
            echo"Encerrando o programa...";
            break 2;
    }
}

echo"\nProgram encerrado";
