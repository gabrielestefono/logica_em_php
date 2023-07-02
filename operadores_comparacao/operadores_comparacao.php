<?php
/* Igual */
if(1 == '1'){
    echo('Igual!' . PHP_EOL);
}else{
    echo "Diferente" . PHP_EOL;
}

/* Diferente */ 

if(1 === '1'){
    echo('Idêntico!' . PHP_EOL);
}else{
    echo "Diferente" . PHP_EOL;
}

/* Idêntico */
if(1 === 1){
    echo('Idêntico!' . PHP_EOL);
}else{
    echo "Diferente" . PHP_EOL;
}

/* Igual */

if(1 != 1){
    echo('Diferente!' . PHP_EOL);
}else{
    echo "Igual" . PHP_EOL;
}

/* Diferente */

if(1 !== '1'){
    echo('Diferente!' . PHP_EOL);
}else{
    echo "Idêntico" . PHP_EOL;
}

/* Maior ou igual */

if(2 >= 1){
    echo('Maior ou igual!' . PHP_EOL);
}else{
    echo "Menor" . PHP_EOL;
}

/* Menor */

if(1 >= 2){
    echo('Maior ou igual!' . PHP_EOL);
}else{
    echo "Menor" . PHP_EOL;
}

/* Menor ou igual */

if(1 <= 3){
    echo('Menor ou igual!' . PHP_EOL);
}else{
    echo "Maior" . PHP_EOL;
}

/* Maior */

if(1 <= 0){
    echo('Menor ou igual!' . PHP_EOL);
}else{
    echo "Maior" . PHP_EOL;
}



?>