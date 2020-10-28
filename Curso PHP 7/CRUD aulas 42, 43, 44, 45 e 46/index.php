<?php 
    include_once "includes/header.php";
    include_once "php_action/db_connect.php";
    include_once "includes/message.php";
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light" style="text-align: center;"> Clientes: </h3>
        <table class="striped">
            <thead>
                <tr>
                   <th> Nome: </th> 
                   <th> Sobrenome: </th> 
                   <th> Email: </th> 
                   <th> Idade: </th> 
                </tr>
            </thead>

            <tbody>
                <?php 
                    $sql = "SELECT * FROM clientes";
                    $resultado = mysqli_query($connect, $sql);

                    while ($dados = mysqli_fetch_array($resultado)) { ?>
                    <tr>
                        <td> <?php echo $dados['nome']; ?> </td>
                        <td> <?php echo $dados['sobrenome']; ?> </td>
                        <td> <?php echo $dados['email']; ?> </td>
                        <td> <?php echo $dados['idade']; ?> </td>
                        <td> <a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"> <i class="material-icons"> edit </i> </a> </td>
                        <td> <a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red"> <i class="material-icons"> delete </i> </a> </a> </td>

                        <!-- Modal Structure -->
                        <div id="modal<?php echo $dados['id']; ?>" class="modal">
                            <div class="modal-content">
                                <h4>Modal Header</h4>
                                <p>A bunch of text</p>
                            </div>
                                <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                            </div>
                        </div>
                    </tr>
                <?php  }  ?>
            </tbody>
        </table>
        <br>

        <a href="adicionar.php" class="btn"> Adicionar cliente </a>
    </div>
</div>

<?php
    include_once "includes/footer.php";
?> 
