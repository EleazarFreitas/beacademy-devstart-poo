<?php

include 'Produto.php';

$produto01 = new Produto();
$produto01 -> setNome('Violão');
$produto01 -> setValor(1500);

var_dump($produto01);