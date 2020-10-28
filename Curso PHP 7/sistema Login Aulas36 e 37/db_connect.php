<?php 
    // Conexão com o banco de dados
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "sistemalogin";

    $connect = mysqli_connect($server, $username, $password, $db_name);

    if (mysqli_connect_error()) {
        echo "Falha na conexão".mysqli_connect_error();
    }

    else {
        echo "Conexão bem sucedida";
    }
?>