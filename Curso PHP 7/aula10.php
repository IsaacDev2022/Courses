<?php 
    // Arrays 3:
    // Arrays associativos: índices/chaves são strings

    $pessoa = array("nome" => "Rodrigo", "idade" => 23, "altura" => 1.75);
    $pessoa["cidade"] = "Brasília";
    echo $pessoa["altura"];

    print_r($pessoa);

    foreach ($pessoa as $indie => $valor) {
        echo $indie.":".$valor."<br>";
    }

    echo "<hr>";

    // Arrays multidimencionais
    $times = array("cariocas" => array("campeao"=>"vasco", "vice"=>"flamengo", "terceiro"=>"botafogo"),
                    "paulistas" =>array("santos", "sao paulo", "palmeiras"),
                    "baianos" => array("bahia", "vitoria", "itabuna"));

    echo $times["baianos"][1];

    foreach ($times["cariocas"] as $indice => $valor) {
        echo $indice.":".$valor."<br>";
    }
?>