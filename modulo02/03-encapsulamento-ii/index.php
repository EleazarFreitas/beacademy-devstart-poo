<?php

include 'Produto.php';

$produto01 = new Produto();
$produto01 -> alterarNome('Violão');
$produto01 -> alterarValor(1500);

var_dump($produto01);