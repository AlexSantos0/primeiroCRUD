<?php

    include('Apps/Controller/BD.php');

    $cate = $_POST['cate'];
    $descricao = $_POST['descricao'];

    $conn = "INSERT INTO `noticias`(null, `categoria`, `descricao`) VALUES (null,$cate,$descricao)";

?>