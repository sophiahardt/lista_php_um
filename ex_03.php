<!-- Exercício 03 – Cadastro Seguro
Um sistema de cadastro precisa proteger informações sensíveis dos usuários.
Crie uma função chamada mascararCpf() que receba um CPF e substitua todos os caracteres por *, mantendo visíveis apenas os quatro últimos dígitos.
Retorne o CPF mascarado. -->

<?php

function mascararCpf($cpf)
{
    $cpfMascarado = str_repeat('*', strlen($cpf) - 4) . substr($cpf, -4);
    return $cpfMascarado;
}

$cpf = "108.844.945-49";

echo "CPF original: $cpf <br>";
echo "CPF mascarado: " . mascararCpf($cpf);


