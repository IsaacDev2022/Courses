<?php 
    // Expressões regulares: define um padrão a ser usado apra procurar ou
    // substituir palavras ou grupos de palavras
    $string = "contato@gmail.com";
    $padrao = "/^[a-Z0-9.\-\_]$/i";

    if (preg_match($padrao, $string)) {
        echo "Válido";
        echo "<hr>";
        echo $string;
    }

    else {
        echo "Inválido";
        echo "<hr>";
    }
?>