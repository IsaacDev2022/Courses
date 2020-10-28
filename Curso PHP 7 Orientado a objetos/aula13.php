<?php 
    // Rerefencia e clonagem:
    
    class Pessoa {
        public $idade;

        public function __clone() {
            echo "Clonagem de objetos";
        }
    }

    $pessoa = new Pessoa();
    $pessoa->idade = 25;

    $pessoa2 = $pessoa; // Pessoa2 é um objeto que faz referencia ao objeto pessoa
    $pessoa2 = clone $pessoa; // Pessoa2 agora é um clone do objeto pessoa, e não apenas uma referencia
    $pessoa2->idade = 35;

    echo $pessoa2->idade;
?>