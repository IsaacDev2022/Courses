<?php 
    // Relação entre objetos

    class Pessoa {

        public function atribuiNome() {
            return "O nome da pessoa é:".$nome;
        }

    }

    class Exibe {
        public $pessoa;
        public $nome;

        function __construct($nome) {
            $this->pessoa = new Pessoa();
            $this->nome = $nome;
        }

        public function exibeNome() {
            echo $this->pessoa->aribuiNome($this->nome);
        }
    }

    $exibe = new Exibe("José");
    $exibe->exibeNome();
?>