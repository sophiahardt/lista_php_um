<!-- Uma escola precisa automatizar o cálculo das médias dos estudantes. 
Crie uma função chamada calcularMedia() que receba um vetor contendo as notas 
de um aluno. 
A função deverá retornar: 
● Maior nota; 
● Menor nota; 
● Média; 
● Situação final Aprovado, Recuperação ou Reprovado). -->

<?php

function calcularMedia($notas){
    $maiorNota = max($notas);
    $menorNota = min($notas);

    $soma = array_sum($notas);
    $media = $soma / count($notas);

    if($media >= 7){
        $resultado = "Aprovado";        
    }elseif($media >= 5){
        $resultado = "Recuperação";
    }else{
        $resultado = "Reprovado";
    }

    return "Maior Nota: $maiorNota <br>
    Menor Nota: $menorNota <br>
    Média: $media <br>
    Resultado: $resultado";
}

$notas = array(10, 8, 6);

echo "Notas: " . implode(", ", $notas) . "<br><br>";
echo calcularMedia($notas);

?>