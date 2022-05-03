<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "cadastro";

$conn = mysqli_connect($server, $user, $pass, $db);

if(mysqli_connect_error()){
    echo "Erro na conexão".mysqli_connect_error();
}

?>