<!-- Uma empresa deseja padronizar automaticamente seus relatórios. 
Crie uma função chamada formatarTexto() que receba um texto e retorne: 
● O texto totalmente em letras maiúsculas; 
● O texto totalmente em letras minúsculas; 
● A primeira letra de cada palavra em maiúscula; 
● A quantidade total de caracteres.  -->

<?php

function formatarTexto($texto)
{

    $resultado = "Texto com letras maiúsculas: " . strtoupper($texto);
    $resultado .= "<br>Texto com letras minúsculas: " . strtolower($texto);
    $resultado .= "<br>Texto com a primeira letra de cada palavra em maiúscula: " .
        ucwords($texto);
    $resultado .= "<br>Quantidade de caracteres: " . strlen($texto);

    return $resultado;
}

$texto = "Se voce não sabe para onde vai, qualquer caminho serve";

echo "Texto original: $texto <br><br>";
echo formatarTexto($texto);

?>