<?php 
    // Escopo de variáveis: contexto onde a variável foi definida

    $nome = "Rodrigo oliveira";
    $a = 1;
    $b = 4;
    $c = 7;

    function exibeNome() {
        global $nome;
        echo $nome;
    }

    exibeNome();
    echo "<hr>";

    function exibeCidade() {
        global $cidade;
        $cidade = "Brasilia <br>";
    }

    exibeCidade();
    echo $cidade;

    function soma() {
        echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
    }

    soma();
?>