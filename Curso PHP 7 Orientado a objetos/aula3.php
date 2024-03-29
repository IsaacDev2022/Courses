<?php 
    // Método construtor:
    
    class Login {
        private $nome;
        private $email;
        private $senha;

        public function __construct($email, $senha, $nome) {
            $this->nome = $nome;
            $this->setEmail($email);
            $this->setSenha($senha);
        }

        public function getNome() {
            return $this->nome;
        }

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

    $login = new Login("teste@teste.com", "123456", "Isaac Martins");
    $login->logar();
    echo "<br>";
    echo $login->getNome();
?>