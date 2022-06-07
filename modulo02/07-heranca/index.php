<?php

include 'Usuario.php';
include 'Gestor.php';
include 'Cliente.php';

$gestor = new Gestor();
$gestor -> setNome('Fulano');

$cliente = new Cliente();
$cliente -> setNome('Beltrano');

var_dump($gestor);
var_dump($cliente);