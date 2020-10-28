<?php 
    // Tratamento de exceções:

    class NewsLetter {

        public function cadastrarEmail($email) {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new Exception("Este email é inválido", 1);
            }

            else {
                echo "Email cadastrado com sucesso!!";
            }

        }
    }

    $nl = new NewsLetter();

    try {
        $nl->cadastrarEmail("contato&");

    } catch (Exception $e) {
        echo $e->getMessage();
        echo $e->getCode();
        echo $e->getLine();
        echo $e->getFile();
    }
?>