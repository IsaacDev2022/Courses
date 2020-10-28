<?php 
    // For e foreach
    for ($contador = 0; $contador <= 10; $contador++) {
        echo "2 X $contador = ".($contador * 2)."<br>";
    }

    echo "<hr>";

    // Foreach é utilizado para percorrer arrays;

    $cores = array("Verda", "Vermelho", "Azul");

    foreach ($cores as $valor) {
        echo $valor."<br>";
    }
?>