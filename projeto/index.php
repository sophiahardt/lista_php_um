<?php

require "funcoes.php";
echo "<h1>Teste da Biblioteca de Funções</h1>";

// 1 - Calcular IMC
$peso = 70;
$altura = 1.75;

echo "<h2>1 - Cálculo de IMC</h2>";
echo "Peso: {$peso} kg<br>";
echo "Altura: {$altura} m<br>";
echo "IMC: " . calcularIMC($peso, $altura);

echo "<hr>";


// 2 - Validar e-mail
$email = "usuario@email.com";

echo "<h2>2 - Validação de E-mail</h2>";
echo "E-mail informado: $email<br>";

if (validarEmail($email)) {
    echo "E-mail válido";
} else {
    echo "E-mail inválido";
}

echo "<hr>";


// 3 - Gerar senha aleatória
echo "<h2>3 - Gerador de Senha</h2>";
echo "Senha criada: " . gerarSenha(10);

echo "<hr>";


// 4 - Contar vogais
$texto = "Cada instante é sempre";

echo "<h2>4 - Contador de Vogais</h2>";
echo "Texto: $texto<br>";
echo "Quantidade de vogais: " . contarVogais($texto);

echo "<hr>";


// 5 - Inverter texto
$frase = "Os flamingos nascem brancos";

echo "<h2>5 - Inverter Texto</h2>";
echo "Texto original: $frase<br>";
echo "Texto invertido: " . inverterTexto($frase);

echo "<hr>";


// 6 - Calcular idade
$anoNascimento = 2005;

echo "<h2>6 - Cálculo de Idade</h2>";
echo "Ano de nascimento: $anoNascimento<br>";
echo "Idade: " . calcularIdade($anoNascimento) . " anos";

echo "<hr>";


// 7 - Converter moeda
$valor = 1500.50;

echo "<h2>7 - Conversão de Moeda</h2>";
echo "Valor: " . converterMoeda($valor);

echo "<hr>";


// 8 - Formatar telefone
$telefone = "47999998888";

echo "<h2>8 - Formatação de Telefone</h2>";
echo "Telefone original: $telefone<br>";
echo "Telefone formatado: " . formatarTelefone($telefone);

echo "<hr>";


// 9 - Saudação conforme horário
echo "<h2>9 - Saudação</h2>";
echo gerarSaudacao();

echo "<hr>";


// 10 - Validar senha forte
$senha = "Senha@123";

echo "<h2>10 - Validação de Senha</h2>";
echo "Senha testada: $senha<br>";

if (validarSenhaForte($senha)) {
    echo "Senha forte e válida";
} else {
    echo "Senha fraca";
}
