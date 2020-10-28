<?php 
    // Filtros de sanitização
    /*
    FILTER_SANITIZE_SPECIAL_CHARS
    FILTER_SANITIZE_FLOAT
    FILTER_SANITIZE_INT
    FILTER_SANITIZE_URL
    */

    if (isset($_POST['enviar'])) {
        $erros = array();
        
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        echo $nome;

        $idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_SPECIAL_CHARS);
        if (!filter_var($idade, FILTER_VALIDATE_INT)) {
            $erros[] = "Idade precisa ser um inteiro";
        }

        if (!empty($erros)) {
            foreach($erros as $erro) {
                echo "<li> $erro </li>";
            }
        }
    }
?>