<!-- Uma empresa deseja proteger pequenas mensagens antes de armazená-las em seu 
sistema. 
Crie uma função chamada criptografarMensagem() que receba um texto e aplique 
uma criptografia utilizando o método da Cifra de César. 
Em seguida, crie outra função chamada descriptografarMensagem() capaz de 
recuperar o texto original.  -->

<?php

function criptografarMensagem($texto)
{
    $resultado = "";
    for ($i = 0; $i < strlen($texto); $i++) {
        $resultado .= chr(ord($texto[$i]) + 3);
    }
    return $resultado;
}

function descriptografarMensagem($texto)
{
    $resultado = "";
    for ($i = 0; $i < strlen($texto); $i++) {
        $resultado .= chr(ord($texto[$i]) - 3);
    }
    return $resultado;
}

$mensagem = "Olá,tudo bem?";
echo "Mensagem original: " . $mensagem . "<br><br>";

$mensagemCriptografada = criptografarMensagem($mensagem);
echo "Mensagem criptografada: " . $mensagemCriptografada . "<br>";

$mensagemDescriptografada = descriptografarMensagem($mensagemCriptografada);
echo "Mensagem descriptografada: " . $mensagemDescriptografada . "<br>";

?>