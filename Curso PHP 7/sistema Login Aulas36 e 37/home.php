<?php 
require_once "db_connect.php";
    // Sessão
    session_start();

    if (!isset($_SESSION['logado'])) {
        header("Location: index.php");
    }

    $id = $_SESSION['id_usuario'];
    $sql = "SELECT * FROM usuarios where id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
    mysqli_close($connect);
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Página restrita </title>
    </head>
<body>
    <h1> Voce está logado <?php echo $dados['nome']; ?> </h1>
    <a href="logout.php"> Sair </a> 

</body>
</html>