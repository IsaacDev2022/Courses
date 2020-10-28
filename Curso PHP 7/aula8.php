<?php 
    // Arrays 1: variáveis que armazenam valores valores,
    // no caso do PHP, elas podem ser de vários tipos
    // Primeira maneira:
    $carros = array("BMW", "Veloster", "Hilux");
    // Podemos também especificar os índies de um array, apenas inserindo o índice + => 
    $carros[] = "Amarok";

    print_r($carros); // Função para mostrar arrays por inteiro juntamente com sua estrutura

    echo $carros[1];

    echo "<br>";

    // Segunda maneira:
    $motos = array();
    $motos[] = "Yamaha";
    $motos[] = "Honde";
    $motos[] = "Suzuki";
    echo $motos[];

    // Terceira maneira: 
    $clientes = ["Rodrigo", "Felipe", "Bia"];
?>