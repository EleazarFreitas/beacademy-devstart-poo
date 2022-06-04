<?php

include 'Produto.php';

$produto01 = new Produto();
$produto01 -> nome = 'Violão';
$produto01 -> valor = 1500;

var_dump($produto01);