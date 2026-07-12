<!-- Uma loja virtual oferece descontos conforme o valor da compra. 
Crie uma função chamada calcularDesconto() que receba o valor total da compra 
e aplique as seguintes regras: 
● Até R$ 100,00 sem desconto; 
● Acima de R$ 100,00 10%; 
● Acima de R$ 500,00 20%; 
● Acima de R$ 1.000,00 30%. 
Retorne o valor original, o desconto aplicado e o valor final da compra.  -->

<?php

function calcularDesconto($valor)
{
    if ($valor > 1000) {
        $desconto = 30;
    } elseif ($valor > 500) {
        $desconto = 20;
    } elseif ($valor > 100) {
        $desconto = 10;
    } else {
        $desconto = 0;
    }

    $valorDesconto = ($valor * $desconto)/100;
    $valorFinal = $valor - $valorDesconto;

    return array($valor, $desconto, $valorFinal);
}

$valor = 780;
list($valor, $desconto, $valorFinal) = calcularDesconto($valor);

echo "Valor original: R$ $valor <br>";
echo "Desconto aplicado: $desconto <br><br>";
echo "Valor com desconto: R$ $valorFinal";

?>