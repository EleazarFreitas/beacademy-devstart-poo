<?php

declare (strict_types=1);

class Produto
{
        
    public function __construct (
        private string $nome,
        private string $descricao
    ) {

    }

}