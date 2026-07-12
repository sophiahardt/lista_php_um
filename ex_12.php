<!-- Um supermercado deseja organizar automaticamente seu catálogo de produtos. 
Crie uma função chamada analisarProdutos() que receba um vetor contendo o 
nome e o preço dos produtos. 
A função deverá retornar: 
● Produto mais caro; 
● Produto mais barato; 
● Média dos preços; 
● Pesquisa de um produto informado pelo usuário.  -->

<?php

function analisarProdutos($produtos, $pesquisa)
{
    $maiorPreco = max($produtos);
    $menorPreco = min($produtos);
    $mediaPreco = array_sum($produtos) / count($produtos);

    $produtoMaisCaro = array_search($maiorPreco, $produtos);
    $produtoMaisBarato = array_search($menorPreco, $produtos);

    $resultado = "<br>Produto mais caro: " . $produtoMaisCaro . " - R$ " . $maiorPreco;
    $resultado .= "<br>Produto mais barato: " . $produtoMaisBarato . " - R$ " . $menorPreco;
    $resultado .= "<br>Média de preço dos produtos: R$ " . $mediaPreco;

    if (array_key_exists($pesquisa, $produtos)) {
        $resultado .= "<br>Produto informado pelo usuário: " . $pesquisa . " - R$ " . $produtos[$pesquisa];
    } else {
        $resultado .= "<br>Produto informado pelo usuário não encontrado";
    }

    return $resultado;
}
$produtos = [
    "Café" => 24.00,
    "Chá" => 13.00,
    "Açúcar" => 8.25,
    "Sal" => 4.75,
];

$pesquisa = "Chá";

echo "Produtos disponíveis: <br>";
foreach ($produtos as $nome => $preco) {
    echo "$nome: R$ $preco <br>";
}
echo "<br>Produto informado pelo usuário: $pesquisa <br>";
echo analisarProdutos($produtos, $pesquisa);

?>