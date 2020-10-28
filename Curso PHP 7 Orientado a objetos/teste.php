<?php 
    class Teste {
        public $nome;
        public $email;

        public function mostrarDados() {
            echo $this->nome."<br>".$this->email;
        }
    }

    $teste = new Teste();
    $teste->nome = "Isaac Silva Martins";
    $teste->email = "silvaisaac213@gmail.com";
    $teste->mostrarDados();
?>