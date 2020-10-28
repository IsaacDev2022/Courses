<?php 
    // Tipos de dados
    // ************* Escalares ************* //
    // String:
    $nome = "Olá mundo pimbador";
    var_dump($nome); // Função que dá informações sobre a variável
    
    if (is_string($nome)) {
        echo "<br>É uma string<hr>";
    }

    else {
        echo "<br>Não é uma string";
    }

    // Int:
    $idade = 19;
    var_dump($idade);

    if (is_int($idade)) {
        echo "É um inteiro<hr>";
    }

    else {
        echo "Não é um inteiro";
    }

    // Float:
    $altura = 1.77;
    var_dump($altura);

    if (is_float($altura)) {
        echo "É um decimal<hr>";
    }

    else {
        echo "Não é um decimal";
    }

    // Boolean:
    $admin = true;
    var_dump($admin);

    if (is_bool($admin)) {
        echo "É um booleano";
    }

    else {
        echo "Não é um booleano";
    }

    echo "<hr>";

    // ************* Compostos ************* //
    // Arrays:
    $carros = array("Gol", "Uno", "Camaro", 12, 35.7, true);
    var_dump($carros);

    if (is_array($carros)) {
        echo "É um array";
    } 

    else {
        echo "Não é um array";
    }

    echo "<hr>";

    // Object:
    class cliente {
        public $nome;

        public function atribuirNome($nome) {
            $this->$nome = $nome;
        }
    }

    $cliente = new Cliente();
    var_dump($cliente);

    if (is_object($cliente)) {
        echo "É um objeto";
    }

    else {
        echo "Não é um objeto";
    }


    // ************* Especiais ************* //

?>