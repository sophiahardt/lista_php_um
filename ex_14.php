<!-- Uma empresa de análise de dados precisa gerar informações estatísticas sobre uma 
coleção de números. 
Crie uma função chamada estatisticasNumericas() que receba um vetor de 
números e retorne: 
● Soma; 
● Média; 
● Maior valor; 
● Menor valor; 
● Mediana; 
● Quantidade de números pares; 
● Quantidade de números ímpares.  -->

<?php

function estatisticasNumericas($numeros)
{
    $soma = array_sum($numeros);
    $media = $soma / count($numeros);
    $maior = max($numeros);
    $menor = min($numeros);

    sort($numeros);
    $quantidade = count($numeros);

    if ($quantidade % 2 == 0) {
        $meio1 = $numeros[$quantidade / 2 - 1];
        $meio2 = $numeros[$quantidade / 2];
        $mediana = ($meio1 + $meio2) / 2;
    } else {
        $mediana = $numeros[floor($quantidade / 2)];
    }

    $pares = 0;
    $impares = 0;

    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }

    $resultado = "Soma: $soma";
    $resultado .= "<br>Média: $media";
    $resultado .= "<br>Maior valor: $maior";
    $resultado .= "<br>Menor valor: $menor";
    $resultado .= "<br>Mediana: $mediana";
    $resultado .= "<br>Quantidade de números pares: $pares";
    $resultado .= "<br>Quantidade de números ímpares: $impares";

    return $resultado;
}

$numeros = [5, 7, 3, 17, 4];

echo "Números fornecidos: " . implode(", ", $numeros) . "<br><br>";
echo estatisticasNumericas($numeros);

?>