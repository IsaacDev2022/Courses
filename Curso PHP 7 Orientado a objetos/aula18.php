<?php 
    // Métodos mágicos:

    class Pessoa {
        private $dados;

        public function __set($nome, $valor) {
            $this->dados[$nome] = $valor;
        }

        public function __get($nome) {
            return $this->dados[$nome];
        }
    }

    $pessoa = new Pessoa();
    $pessoa->nome = "Pimbador";

    var_dump($pessoa);

    echo $pessoa->nome;
?>