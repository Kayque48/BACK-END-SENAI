<?php

// 9. Classificação de Temperatura

$temp = readline("Digite uma temperatura: ");

echo ($temp < 15)? "Frio":(($temp > 15 && $temp < 25)? "Agradável": "Quente");