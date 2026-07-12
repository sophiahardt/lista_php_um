<!-- Uma plataforma de ensino deseja verificar algumas propriedades dos números 
informados pelos alunos. 
Crie uma função chamada analisarNumero() que receba um número inteiro e 
informe se ele é: 
● Par ou ímpar; 
● Primo ou não; 
● Perfeito ou não. 
Retorne a todas essas informações. -->

<?php

function analisarNumeros($numero)
{
    if ($numero % 2 == 0) {
        $parImpar = "Par";
    } else {
        $parImpar = "Ímpar";
    }

    $primo = "Primo";

    if ($numero < 2) {
        $primo = "Não é primo";
    } else {
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                $primo = "Não é primo";
                break;
            }
        }
    }

    $soma = 0;

    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $soma += $i;
        }
    }

    if ($soma == $numero) {
        $perfeito = "Esse número é perfeito";
    } else {
        $perfeito = "Esse número não é perfeito";
    }

    return "Número: $numero <br><br>
    Par ou ímpar: $parImpar <br>
    Primo ou não: $primo <br>
    Perfeito ou não: $perfeito";
}

$numero = 28;

echo analisarNumeros($numero);

?>