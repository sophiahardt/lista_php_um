<!-- Uma escola deseja organizar automaticamente a lista de alunos matriculados. 
Crie uma função chamada ordenarNomes() que receba uma string contendo nomes 
separados por vírgulas. 
A função deverá transformar os nomes em um vetor, remover espaços 
desnecessários, ordenar em ordem alfabética e retornar a lista organizada. -->

<?php

function ordenarNomes($nomes)
{
    $vetor = explode(",", $nomes);

    foreach ($vetor as &$nome) {
        $nome = trim($nome);
    }

    sort($vetor);

    return implode(",", $vetor);
}

$nomes = "Carlos, Laura, Juliana, Pedro, Jean";

echo "Nomes desordenados: " . $nomes . "<br><br>";
echo "Nomes ordenados: " . ordenarNomes($nomes) . "<br>";

?>