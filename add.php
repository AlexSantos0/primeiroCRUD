<?php
//HEADER
require_once 'Models/header.php';
?>

<div class="container">
    <h3>Nova notícia</h3>
    <form action="db/create.php" method="post">
        <div class="mb-3">
            <label for="titulo" class="form-label">Titulo da notícia</label>
            <input type="text" name="titulo" class="form-control" placeholder="Digite o titulo da notícia" require>
        </div>
        <div class="mb-3">
            <label for="noticia" class="form-label">Descrição</label>
            <textarea name="noticia" class="form-control" rows="5" placeholder="Digite sua notícia" require></textarea>
        </div>

        <button type="submit" name="btn-cadastrar" class="btn btn-success">Cadastrar</button>
        <a href="index.php"><button type="button" class="btn btn-danger">Voltar</button></a>
    </form>
 </div>


<?php
//FOOTER
require_once 'Models/footer.php';
?>

