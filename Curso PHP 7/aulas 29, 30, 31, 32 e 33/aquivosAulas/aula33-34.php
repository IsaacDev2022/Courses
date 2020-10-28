<?php 
    // Upload de arquivos
    /* if (isset($_POST["Enviar"])) {
        $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
        $extensao = pathinfo($_FILES["arquivo"]["name"], PATHINFO_EXTENSION);
        
        if (in_array($extensao, $formatosPermitidos)) {
            $pasta = "arquivos/";
            $temporario = $_FILES["arquivo"]["tmp_name"];
            $novoNome = uniqid().".$extensao";

                if (move_uploaded_file($temporario, $pasta.$novoNome)) {
                    $mensagem = "Upload feito com sucesso";
                }

                else {
                    $mensagem = "Erro, não foi possível fazer o upload";
                }
        }

        else {
            $mensagem = "Formato inválido";
        }

        echo $mensagem;
    } */

    // Upload de arquivos múltiplos 

    var_dump($_FILES);

    if (isset($_POST["Enviar"])) {
        $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
        $quantidadeArquivos = count($_FILES['arquivo']['name']);
        $contador = 0;

        while ($contador < $quantidadeArquivos) {
            $extensao = pathinfo($_FILES["arquivo"]["name"][$contador], PATHINFO_EXTENSION);
        
            if (in_array($extensao, $formatosPermitidos)) {
                $pasta = "arquivos/";
                $temporario = $_FILES["arquivo"]["tmp_name"][$contador];
                $novoNome = uniqid().".$extensao";

                    if (move_uploaded_file($temporario, $pasta.$novoNome)) {
                        echo "Upload feito com sucesso para a $pasta.$novoNome <br>";
                    }

                    else {
                        echo "Erro, não foi possível fazer o upload do $temporario";
                    }
            }

            else {
                echo "$extensao não é permitida";
            }

            $contador++;

        }
    }

?>