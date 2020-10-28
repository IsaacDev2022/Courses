<?php 
    require "classes/aula12.php";
    require "models/aula12.php";

    use classes\Produto as productModel;
    use classes\Produto as productClass;

    $produto = new \models\ Produto();
    $produto->mostrarDetalhes();

    echo "<br>";

    $produto = new productClass();
?>