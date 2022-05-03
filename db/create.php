<?php
//SESSÃO
session_start();

//CONEXÃO
    require_once 'DB_conection.php';

    if(isset($_POST['btn-cadastrar'])){
        $titulo = $_POST['titulo'];
        $noticia = $_POST['noticia'];

        $sql = "INSERT INTO noticia (nome, categoria) VALUES ('$titulo', '$noticia')";

        if(mysqli_query($conn, $sql)){
            $_SESSION['mensagem'] = "<p class='alert alert-success'>Cadastrado com sucesso!";
            header('Location: ../index.php');
        }else{
            $_SESSION['mensagem'] = "Erro ao cadastrar!";
            header('Location: .../index.php');
        }
    }

?>