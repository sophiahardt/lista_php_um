<?php

// 1 - Calcular IMC
function calcularIMC($peso, $altura)
{
    $imc = $peso / ($altura * $altura);
    return round($imc, 2);
}

// 2 - Validar e-mail
function validarEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

// 3 - Gerar senha aleatória
function gerarSenha($tamanho = 8)
{
    $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#$%";
    $senha = "";

    for ($i = 0; $i < $tamanho; $i++) {
        $senha .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }

    return $senha;
}

// 4 - Contar vogais
function contarVogais($texto)
{
    $contador = 0;
    $vogais = "aeiouAEIOU";

    for ($i = 0; $i < strlen($texto); $i++) {
        if (strpos($vogais, $texto[$i]) !== false) {
            $contador++;
        }
    }

    return $contador;
}

// 5 - Inverter texto
function inverterTexto($texto)
{
    return strrev($texto);
}

// 6 - Calcular idade
function calcularIdade($anoNascimento)
{
    $anoAtual = date("Y");

    return $anoAtual - $anoNascimento;
}

// 7 - Converter moeda
function converterMoeda($valor)
{
    return "R$ " . number_format($valor, 2, ",", ".");
}

// 8 - Formatar telefone
function formatarTelefone($telefone)
{
    $telefone = preg_replace('/\D/', '', $telefone);

    return "(" . substr($telefone, 0, 2) . ") " .
        substr($telefone, 2, 5) . "-" .
        substr($telefone, 7);
}

// 9 - Gerar saudação conforme horário
function gerarSaudacao()
{
    $hora = date("H");

    if ($hora < 12) {
        return "Bom dia!";
    } elseif ($hora < 18) {
        return "Boa tarde!";
    } else {
        return "Boa noite!";
    }
}

// 10 - Validar senha forte
function validarSenhaForte($senha)
{
    $temMaiuscula = preg_match('/[A-Z]/', $senha);
    $temMinuscula = preg_match('/[a-z]/', $senha);
    $temNumero = preg_match('/[0-9]/', $senha);
    $temEspecial = preg_match('/[\W]/', $senha);
    $tamanho = strlen($senha) >= 8;

    return $temMaiuscula &&
        $temMinuscula &&
        $temNumero &&
        $temEspecial &&
        $tamanho;
}
?>