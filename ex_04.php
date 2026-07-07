<!-- Exercício 04 – Gerador de Senhas
Uma empresa deseja gerar senhas temporárias para seus colaboradores.
Crie uma função chamada gerarSenha() que receba a quantidade de caracteres desejada e retorne uma senha aleatória contendo letras maiúsculas, minúsculas, números e caracteres especiais. -->

<?php

function gerarSenha($quantidadeCaracteres)
{
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=';
    $senha = '';

    for ($i = 0; $i < $quantidadeCaracteres; $i++) {
        $indiceAleatorio = rand(0, strlen($caracteres) - 1);
        $senha .= $caracteres[$indiceAleatorio];
    }

    return $senha;
}

echo "Senha gerada: " . gerarSenha(12);