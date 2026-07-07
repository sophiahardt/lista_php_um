<!-- Exercício 02 – Espelho Mágico
Uma empresa de tecnologia está desenvolvendo um sistema para tratamento de textos.
Crie uma função chamada inverterTexto() que receba uma string e retorne o texto completamente invertido.
Além disso, exiba a quantidade de caracteres existentes na string original.-->

<?php
function inverterTexto($texto)
{

    $textoInvertido = strrev($texto);
    $quantidadeCaracteres = strlen($texto);
    return array($textoInvertido, $quantidadeCaracteres);
}

$texto = "paralelamente";
$resultado = inverterTexto($texto);

echo "Texto original: $texto <br>";
echo "Texto invertido: " . $resultado[0] . "<br>";
echo "Quantidade de caracteres: " . $resultado[1];
