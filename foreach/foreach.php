<?php

$listaFruta = ['Manga', 'Morango','Acerola', 'Uva'];
$listaFruta[] = "Goiaba";

foreach ($listaFruta as $item => $fruta) {
    echo "O item $fruta está no índice $item da lista." . PHP_EOL;
}
