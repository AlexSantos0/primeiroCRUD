<?php
//HEADER
require_once 'Apps/Models/header.php';
?>
<div class="container">
    <h3>Nova notícia</h3>
    <div class="mb-3">
        <label for="titulo" class="form-label">Titulo da notícia</label>
        <input type="text" name="titulo" class="form-control" placeholder="Digite o titulo da notícia">
    </div>
    <div class="mb-3">
        <label for="noticia" class="form-label">Descrição</label>
        <textarea class="form-control" rows="5" placeholder="Digite sua notícia"></textarea>
    </div>

    <button type="button" class="btn btn-success">Cadastrar</button>
    <button type="button" class="btn btn-danger">Voltar</button>
 </div>
<?php
//FOOTER
require_once 'Apps/Models/footer.php';
?>

