<?php
$dia = 0;

switch ($dia){
    case 0:
        echo "Domingo" . PHP_EOL;
        break;
    case 1:
        echo "Segunda-Feira" . PHP_EOL;
        break;
    case 2:
        echo "Terça-Feira" . PHP_EOL;
        break;
    case 3:
        echo "Quarta-Feira" . PHP_EOL;
        break;
    case 4:
        echo "Quinta-Feira" . PHP_EOL;
        break;
    case 5:
        echo "Sexta-Feira" . PHP_EOL;
        break;
    case 6:
        echo "Sábado" . PHP_EOL;
        break;
    default:
        echo "Insira um valor válido!" . PHP_EOL;
}
