<?php 
    // Classes, atributos e métodos:
    
    class Pessoa {
        public $nome;
        public $idade;
        
        public function falar() {
            echo $this->nome.$this->idade;
        }
    }

    $pessoa = new Pessoa();
    $pessoa->nome = "Isaac";
    $pessoa->idade = 19;
    $pessoa->falar();
    // echo $pessoa->nome;
?>