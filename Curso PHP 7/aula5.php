<?php 
    // Áspas simples, duplas e concatenação
    $nome = 'Rogrido oliveira';
    echo 'Meu nome é $nome <br>'; // Tudo que estiver entre áspas simples vai ser considerado texto, ou seja, são literais
    echo 'Meu nome é: '.$nome.' e minha idade é \'23\''; // A contatenação em PHP é o caractere "."
    // Para exibir algo em aspas, só adicionas um '\ e depois da string

    echo "<hr>";
    echo "Meu nome é $nome"; // As áspas duplas são interpretativas
?>