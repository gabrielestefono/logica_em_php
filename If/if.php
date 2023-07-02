<?php 
if(1>0){
    echo "Verdadeiro" . PHP_EOL;
}else{
    echo "Falso" . PHP_EOL;
}

$idade = 27;
$matriculado = false;
$nome = "Gabriel";

if($idade >= 18 && $matriculado == true){
    echo "Matriculado!" . PHP_EOL;
}else if(!$matriculado){
    echo "Não matriculado!" . PHP_EOL;
}else{
    echo "É necessário ser maior que 18 anos!" . PHP_EOL;
}

if($nome == "Gabriel"){
    echo "Bem-vindo, Gabriel!" . PHP_EOL;
}else{
    echo "Olá! Seja bem vindo!" . PHP_EOL;
}