<?php 
    // Polimorsifmo:

    class Animal {
        public function andar() {
            echo "O animal andou!!";
        }

        public function correr() {
            echo "O animal correu!!";
        }
    }

    class Cavalo extends Animal {
        // Métodos herdados, de mesmo nome mas com funcionalidades diferentes
        public function Andar() {
            $this->correr();
        }

    }

    $animal = new Cavalo();
    $animal->andar();
?>