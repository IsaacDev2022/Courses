<?php 
    // Constantes:
    class Pessoa {
        const NOME = "Isaac";

        public function exibirNome() {
            echo self::NOME; // Comando para referenciar uma constante
        }
    }

    class Isaac extends Pessoa {
        const NOME = "Pimbador";

        public function exibirNome() {
            echo self::NOME; // Self referencia a constante dentro do escopo da classe
            echo parent::NOME; // parent referencia a constante da classe pai
        }
    }

    $pessoa = new Pessoa();
    $pessoa->exibirNome();
?>