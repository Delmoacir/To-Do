<?php
    $serve = "localhost";
    $user = "root";
    $password = "";
    $dbname = "todo";
    $connect = mysqli_connect($serve, $user, $password, $dbname);

    if (!$connect){
        die("erro ao conectar ao banco de dados". mysqli_connect_error());
    }
?>