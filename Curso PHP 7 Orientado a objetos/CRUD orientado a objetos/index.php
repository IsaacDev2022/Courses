<?php 
    require_once "App/Model/Connection.php";
    require_once "App/Model/Produto.php";
    require_once "App/Model/ProdutoDAO.php";

    $produto = new Produto();
    $produto->setNome("Notebook");
    $produto->setDescricao("15, 4GB");

    $pDAO = new ProdutoDAO();
    $pDAO->read(); 

    foreach($pDAO->read() as $produto) {
        echo $produto['nome']."<br>".$produto['descricao']."<hr>";
    }
?>