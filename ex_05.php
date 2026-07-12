<!-- Uma editora deseja obter algumas informações sobre os textos enviados pelos 
autores. 
Crie uma função chamada analisarTexto() que receba um texto e retorne: 
● Quantidade de palavras; 
● Quantidade de caracteres; 
● Quantidade de vogais; 
● Quantidade de consoantes.  -->

<?php

function analisarTexto($texto)
{

    $palavras = str_word_count($texto);
    $caracteres = strlen($texto);

    $vogais = 0;
    $consoantes = 0;

    for ($i = 0; $i < strlen($texto); $i++) {

        $letra = strtolower($texto[$i]);

        if ($letra == "a" || $letra == "e" || $letra == "i" || $letra == "o" || $letra == "u") {
            $vogais++;
        } else if (ctype_alpha($letra)) {
            $consoantes++;
        }
    }


    echo "Quantidade de palavras: " . $palavras . "<br>";
    echo "Quantidade de caracteres: " . $caracteres . "<br>";
    echo "Quantidade de vogais: " . $vogais . "<br>";
    echo "Quantidade de consoantes: " . $consoantes . "<br>";
}

$texto = "A vida é um caos aleatório, ordenada pelo tempo <br>";

echo "Texto: " . $texto . "<br>";

analisarTexto($texto);
?>