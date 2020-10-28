<?php 
    // Condicionais 1:
    $numero = 10;

    if ($numero == 10) {
        echo "É igual a 10";
    }

    elseif($numero < 15) {
        echo "<br> É menor que 15";
    }

    else {
        echo "Não é igual a 10";
    }

    $media = 7;

    echo ($media >= 7) ? "Aprovado" : "Reprovado";
?>