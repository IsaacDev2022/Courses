<?php 
    // Métodos get e set:
    
    class Login {
        private $email;
        private $senha;

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($e) {
            $email = filter_var($e, FILTER_SANITIZE_EMAIL);
            $this->email = $email;
        }

        public function getSenha() {
            return $this->senha;
        }

        public function setSenha($s) {
            $this->senha = $s;
        }

        public function logar() {
            if ($this->email == "teste@teste.com" && $this->senha == "123456") {
                echo "Logado com sucesso";
            }

            else {
                echo "Dados inválidos";
            }
        }
    }

    $login = new Login();
    $login->setEmail("teste@teste.com");
    $login->setSenha("123456");
    $login->logar();
    echo "<br>";
    echo $login->getEmail();
?>