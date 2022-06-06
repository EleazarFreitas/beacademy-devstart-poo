<?php

include 'Produto.php';

$produto01 = new Produto('Violão', 1500);
$produto01 -> setDescricao('Usado');
// $produto01 -> setNome('Violão');
// $produto01 -> setValor(1500);

$produto02 = new Produto('Violão 2', 1000);

var_dump($produto01);
var_dump($produto02);