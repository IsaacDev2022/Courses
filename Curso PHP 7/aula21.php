<?php 
    // Operadores lógicos
    // Comparações entre expressões
    /* 
    e (&& - and)
    ou (|| - or)
    ou exclusivo (xor)
    negação (!)
    */

    $idade = 26;
    $nome = "Isaac";

    if (!$idade == 26 and $nome == "Isaac") {
        echo "É verdadeiro";
    }

    else {
        echo "É falso";
    }
?>