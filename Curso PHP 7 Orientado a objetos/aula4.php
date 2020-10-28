<?php 
    // Herança:

    class Veiculo {
        public $modelo;
        public $cor;
        public $ano;

        public function andar() {
            echo "Andou";
        }

        public function parar() {
            echo "Parou";
        }
    }

    class Carro extends Veiculo {
        public function ligarLimpador() {
            echo "Limpador ligado!";
        }
    }

    class Moto extends Veiculo {
        public function darGrau() {
            echo "Dando graaaauuuu!!!";
        }
    }

    $carro = new Carro();
    $carro->modelo = "Gol";
    $carro->cor = "Vermelho";
    $carro->ano = 2018;
    $carro->andar();
    $carro->ligarLimpador();
    echo "<br>";
    var_dump($carro);
    echo "<br>";

    $moto = new Moto();
    $moto->modelo = "Ronda bis";
    $moto->cor = "Azul";
    $moto->ano - "2017";
    $moto->parar();
    $moto->darGrau();
    echo "<br>";
    var_dump($moto);
?>