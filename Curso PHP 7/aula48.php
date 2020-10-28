<?php 
    // $_COOKIE: armazenar informações
    setcookie('user', 'Isaac', time() + 3600);
    setcookie('email', 'isaac.silva@gmail.com', time() + 3600);
    setcookie('ultima_pesquisa', 'tenis adidas', time() + 3600);

    echo $_COOKIE['user'];
?>