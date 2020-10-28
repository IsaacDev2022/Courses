<?php 
    // Arrays 2:
    $carros = array("BMW", "Veloster", "Hilux");
    echo count($carros); // Função para exibir a quantidade de intens de um array;

    $clientes = ["Rodrigo", "Felipe", "Bia"];
    $totalClientes = count($clientes);

    echo $totalClientes;

    echo "<hr>";

    // Foreach

    foreach($carros as $valor) {
        echo $valor."<br>";
    }

?>