<?php 
    // Constantes: variáveis que não mudam de valor ao longo da execução do programa
    define("NOME", "José Carlos");
    // define("NOME", "Isaac"); causaria um erro
    echo NOME;

    define("IDADE", 25);
    define("ALTURA", 1.78);
    define("CASADO", FALSE);
    var_dump(IDADE);

    echo "<br><hr>";

    echo "Meu nome é ".NOME.", minha idade é ".IDADE." e minha altura é ".ALTURA;
    define("TIMES", ['vasco','flamengo']);

    echo "<br><hr>";
    echo TIMES[1];
    echo "<br>";
    var_dump(TIMES);

    // As constantes por padrão são globais

    function exibeNome() {
        echo NOME;
    }

    exibeNome();
?>