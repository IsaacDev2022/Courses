<?php 
    $server = "localhost";
    $user = "root";
    $password = "";
    $db_name = "crud";

    $connect = mysqli_connect($server, $user, $password, $db_name);
    mysqli_set_charset($connect, "utf8");

    if (mysqli_connect_error()) {
        echo "Erro ao se conectar com o banco de dados. Erro: ".mysqli_connect_error();
    }

?>