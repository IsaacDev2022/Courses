<?php 
    // Validações
    // funções (filter_input - filter_var)
    /*
    FILTER_VALIDADE_INT
    FILTER_VALIDADE_EMAIL
    FILTER_VALIDADE_FLOAT
    FILTER_VALIDADE_IP
    FILTER_VALIDADE_URL
    */
    if (isset($_POST['enviar'])) {
        $erros = array();
        
        if (!$idade = filter_input(INPUT_POST, "idade", FILTER_VALIDATE_INT)) {
            $erros[] = "Idade precisa ser um inteiro";
        }

        if (!$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
            $erros[] = "Email precisa ser uma string";
        }

        if (!$ip = filter_input(INPUT_POST, "ip", FILTER_VALIDATE_IP)) {
            $erros[] = "IP inválido";
        }

        if (!$url = filter_input(INPUT_POST, "url", FILTER_VALIDATE_URL)) {
            $erros[] = "URL inválida";
        }

        if (!empty($erros)) {
            foreach($erros as $erro) {
                echo "<li> $erro </li>";
            }
        }
    }
?>