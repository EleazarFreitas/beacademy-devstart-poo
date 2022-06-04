<?php

declare (strict_types=1);

class Curso
{
    public string $conteudo;
    public bool $certificado;
    public int $cargaHoraria;
};
class Professor
{
    public string $disciplina;
    public float $salario;
    public int $experiencia;
};
class Aluno
{
    public string $nome;
    public int $idade;
    public array $notas;
};