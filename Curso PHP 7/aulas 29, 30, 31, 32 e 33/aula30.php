<?php 
    // Formulários GET

    $nome = $_GET["nome"];
    $email = $_GET["email"];

    echo "Nome: ".$nome."<br>"."Email: ".$email;

    var_dump($_GET);
?>