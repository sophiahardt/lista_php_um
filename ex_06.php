<!-- Uma empresa que fabrica sensores precisa converter temperaturas entre diferentes 
escalas. 
Crie uma função chamada converterTemperatura() que receba um valor, a escala 
de origem e a escala de destino. 
A função deverá permitir conversões entre Celsius, Fahrenheit e Kelvin.  -->

<?php

function converterTemperatura($valor, $origem, $destino)
{
    if ($origem == "C" && $destino == "F") {
        $resultado = ($valor * 9 / 5) + 32;
    } elseif ($origem == "C" && $destino == "K") {
        $resultado = $valor + 273.15;
    } elseif ($origem == "F" && $destino == "C") {
        $resultado = ($valor - 32) * 5 / 9;
    } elseif ($origem == "F" && $destino == "K") {
        $resultado = (($valor - 32) * 5 / 9) + 273.15;
    } elseif ($origem == "K" && $destino == "C") {
        $resultado = $valor - 273.15;
    } elseif ($origem == "K" && $destino == "F") {
        $resultado = (($valor - 273.15) * 9 / 5) + 32;
    } elseif ($origem == $destino) {
        $resultado = $valor;
    } else {
        return "Escala inválida.";
    }
    return $resultado;
}

$valor = "298.15";
$origem = "K";
$destino = "C";

$resultado = converterTemperatura($valor, $origem, $destino);

echo "Valor inicial: $valor °$origem <br>";
echo "Converter para: °$destino <br><br>";
echo "Resultado: $resultado °$destino";

?>