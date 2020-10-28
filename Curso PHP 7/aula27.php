<?php 
    // Funções
    function exibirNome($nome) {
        echo "Meu nome é $nome";
    }

    exibirNome("Brian");

    echo "<hr>";

    function calcularMedia($nome, $nota1, $nota2) {
        $media = ($nota1 + $nota2) / 2;

        echo "Meu nome é $nome e minha média é $media";
    }

    calcularMedia("Isaac", 6, 9);
?>