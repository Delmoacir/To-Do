<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    <?php

    function salvarCookie($key, $value) {
        setcookie($key, $value, time() + 60);
        return $value;
    }

    
    
    if (isset($_COOKIE['usuario'])){
        $nome = $_COOKIE['usuario'];

    }else{
        $key_usuario = "usuario";
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $nome_usuario = $_POST["usuario"];
            $nome = salvarCookie($key_usuario, $nome_usuario);
        }else{
            $nome_usuario = $_GET["usuario"];
            $nome = salvarCookie($key_usuario, $nome_usuario);
        }
    }

    echo "<h3> Bem Vindo, $nome<br>";
    ?>
    
</body>
</html>