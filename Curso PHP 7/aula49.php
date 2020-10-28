<?php 
    // Datas

    // Date:
    date_default_timezone_set('America/Sao_Paulo');
    // echo date('d/m/y h:i:s');
    echo "<hr>";

    // Data no banco de dados:
    $date = date("Y-m-d"); // DATE
    $dateTime = date("Y-m-d H:i:s");
    echo $dateTime;

    echo "<hr>";

    // Time:
    echo time();
    $time = time();
    echo date('d/m/y', $time);

    echo "<hr>";

    // MKTIME:
    $data_pagamento = mktime(15, 30, 00, 02, 15, 2023);
    echo date('d/m - h:i', $data_pagamento);

    echo "<hr>";

    // STRTOTIME
    $data = "2020-10-16 14:40:00";
    $data = strtotime($data);

    echo date('d/m/y', $data);
?>