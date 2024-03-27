<?php
include_once "config.php";

class Usuario {
    private $connect;

    public function __construct($connect) {
        $this->connect = $connect;
    }

    public function adicionarUsuario($nome, $email, $senha, $eh_igual) {
        if ($senha != $eh_igual) {
            echo "As senhas não coincidem";
            return;
        }

        $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

        if (mysqli_query($this->connect, $sql)) {
            echo "Usuário adicionado com sucesso!";
            if (isset($_COOKIE['email'])) {
                header("Location: ../a.php");
                exit();
            } else {
                $key_email = "email";
                setcookie($key_email, $email, time() + (60*60*60), "/");
                header("Location: ../a.php");
                exit();
            }
        } else {
            echo "Erro ao adicionar usuário: " . mysqli_error($this->connect);
        }
    }
}

$nome = $_GET["usuario"];
$email = $_GET["email"];
$senha = $_GET["senha"];
$eh_igual = $_GET["repetir-senha"];

$usuario = new Usuario($connect);
$usuario->adicionarUsuario($nome, $email, $senha, $eh_igual);
mysqli_close($connect);
?>