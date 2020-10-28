<?php 
    // Abstração:

    // Classe abstrada:
    abstract class Banco {
        protected $saldo;
        protected $limiteSaque;
        protected $limiteJuros;

        abstract protected function sacar($sal);
        abstract protected function depositar($dep);
    }

    class Itau extends Banco {

        public function setSaldo($sal) {
            $this->saldo = $sal;
        }

        public function getSaldo() {
            return $this->saldo;
        }

        public function sacar($sal) {
            $this->saldo -= $sal;
            echo "O saque foi de: ".$sal;
        }

        public function depositar($dep) {
            $this->saldo += $dep;
            echo "O depósito foi de: ".$dep;
        }
    }

    $itau = new Itau();
    $itau->setSaldo(1000);
    $itau->depositar(400);
    echo "<br>".$itau->getSaldo();
?>