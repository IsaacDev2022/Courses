<?php 
    // Criptografia
    // base64: mão dupla
    $senha = "123456";

    $novaSenha = base64_encode($senha);
    echo "base64: ".$novaSenha."<br>";
    echo "Sua senha é: ".base64_decode($novaSenha);

    echo "<hr>";
    // md5: mão única
    echo "Md5: ".md5($senha);
    echo "<hr>";
    // sha1;
    echo "Sha1: ".sha1($senha);
?>