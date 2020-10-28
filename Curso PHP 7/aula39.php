<?php 
    // Senhas seguras: password_rash

    $senha = "123456";

    $senhaSegura = password_rash($senha, PASSWORD_DEFAULT. $options);

    echo $senhaSegura;
?>