<?php 
    // Funções para String 1:
    /*
    stroupper
    strtolwer
    substr
    str_pad
    str_repeat
    strlen
    str_replace
    strpos
    */

    $nome = "pimbador";
    $nome = strtoupper($nome);
    $nome = strtolower($nome);
    echo $nome;

    echo "<hr>";
    $mensagem = "Olá mundo";
    echo substr($mensagem, 4, 4);

    echo "<hr>";
    $objeto = "Mouse";
    $novoObjeto = str_pad($objeto, 7, "**", STR_PAD_LEFT);
    echo $novoObjeto;

    echo "<hr>";
    $string = str_repeat("Sucesso", 4);
    echo $string;

    echo "<hr>";
    echo strlen($mensagem);

    echo "<hr>";
    $texto = "A seleção Argentina será campeã da copa do mundo de 2018";
    $novoTexto = str_replace("Argentina", "Brasileira", $texto);

    echo $novoTexto;

    echo "<hr>";
    echo strpos($texto, "copa");
?>