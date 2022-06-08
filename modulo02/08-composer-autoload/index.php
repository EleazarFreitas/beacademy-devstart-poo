<?php

include 'vendor/autoload.php';

use Classes\Usuario as Usuario;
use Classes\Config\Usuario as UsuarioConfig;

$usuario01 = new Usuario();
$usuario02 = new UsuarioConfig();

var_dump($usuario01);
var_dump($usuario02);