<?php
    require_once 'DB_conection.php';

    if(isset($_POST['btn-cadastrar'])){
        $titulo = $_POST['titulo'];
        $noticia = $_POST['noticia'];

        $sql = "INSERT INTO noticia (nome, categoria) VALUES ('$titulo', '$noticia')";

        if(mysqli_query($conn, $sql)){
            header('Location: ../index.php?sucesso');
        }else{
            header('Location: .../index.php?erro');
        }
    }

?>