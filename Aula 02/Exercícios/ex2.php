<?php

    #2. Classificação de Nota

    $nota = readline("Digite sua nota: ");

    echo ($nota >= 9)? "Excelente": (($nota >= 7)? "Bom": "reprovado");