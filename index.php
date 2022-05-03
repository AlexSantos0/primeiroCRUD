<?php
//CONEXÃO
require_once 'db/DB_conection.php';
//HEADER
require_once 'Models/header.php';
//MENSAGEM
require_once 'Models/mensagem.php';
?>

<div class="container">
    <h3>Notícias</h3>
    <?php
    $sql = "SELECT * FROM noticia";
    $resultado = mysqli_query($conn, $sql);
    while($dados = mysqli_fetch_array($resultado)){
    ?>
    <div class="corpo" style="display: inline-block;">
        <div class="card" style="width: 20rem; margin: 10px;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $dados['nome'];?></h5>
                <p class="card-text"><?php echo $dados['categoria'];?></p>
                <a href="#" class="btn btn-success">Atualizar</a>
                <a href="#" class="btn btn-danger">Deletar</a>
            </div>
        </div>
    </div>
    <?php } ?>
</div>

<?php
//FOOTER
require_once 'Models/footer.php';
?>

