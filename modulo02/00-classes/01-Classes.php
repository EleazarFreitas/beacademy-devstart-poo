<?php

include '00-Classes.php';

$curso = new Curso();
$curso -> conteudo = 'PHP';
$curso -> certificado = true;
$curso -> cargaHoraria = 50;

var_dump($curso);

$professor = new Professor();
$professor -> disciplina = 'PHP Avançado';
$professor -> salario = 6000;
$professor -> experiencia = 10;

var_dump($professor);