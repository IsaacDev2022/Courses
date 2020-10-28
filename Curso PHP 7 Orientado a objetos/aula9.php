<?php 
    // Métodos e atributos estáticos:

    class Login {
        public static $user;

        public static function verificarLogin() {
            echo "O ".self::$user." está logado";
            // O $this não funciona para métodos estáticos 
        }

        public function sairSistema() {
            echo "O usuário deslogou";
        }
        
    }

    Login::$user = "Admin";
    Login::verificarLogin();
?>