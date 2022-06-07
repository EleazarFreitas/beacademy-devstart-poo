<?php

declare (strict_types=1);

class Gestor extends Usuario
{
    private float $salario;

    public function getSalario () : float
    {
        return this -> salario;
    }
    public function setSalario (float $salario) : void
    {
        $this -> salario = $salario;
    }
}