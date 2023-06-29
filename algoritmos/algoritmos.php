<?php

/* Imprimindo nome */
$nome = "Gabriel";
$sobrenome = "Estéfono";
$nomeCompleto = $nome . " " . $sobrenome;
echo $nomeCompleto . PHP_EOL;

/* Algorítmo de média aritmética */

$nota1 = 10;
$nota2 = 5.8;
$nota3 = 8.7;
$nota4 = 6;
$media =  ($nota1 + $nota2 + $nota3 + $nota4) / 4;

echo $media . PHP_EOL;

/* Mensagem personalizada */

$mensagem = "$nomeCompleto, você conquistou a média de $media" . PHP_EOL;
echo $mensagem;
?>