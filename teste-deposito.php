<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        new CPF('987.654.321-62'), 'Vanessa Camargo',
        new Endereco('Cidade', 'Bairro', 'Rua', 'Numero')
    )
);

try{
    $contaCorrente->deposita(-100);
}catch (InvalidArgumentException){
    echo "Valor a depositar precisa ser positivo!";
}