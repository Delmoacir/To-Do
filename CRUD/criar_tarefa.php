<?php
include_once "config.php";

class Tarefa {
    private $connect;

    public function __construct($connect) {
        $this->connect = $connect;
    }

    public function adicionarTarefa($titulo, $descricao, $email_da_conta) {
        $resultado_id = $this->getIdUsuario($email_da_conta);

        $sql = "INSERT INTO tarefa (titulo, descricao, estado, id_do_usuario) VALUES ('$titulo', '$descricao', 'PENDENTE', '$resultado_id')";

        if (mysqli_query($this->connect, $sql)) {
            echo "Tarefa adicionada com sucesso!";
            header("Location: ../a.php");
            exit();
        } else {
            echo "Erro ao adicionar tarefa: " . mysqli_error($this->connect);
        }
    }

    private function getIdUsuario($email_da_conta) {
        $sql = "SELECT id_usuario FROM usuario WHERE email='$email_da_conta'";
        $res_id = mysqli_query($this->connect, $sql);
        $row = mysqli_fetch_assoc($res_id);
        return $row['id_usuario'];
    }
}


$titulo = $_GET['titulo'];
$descricao = $_GET['descricao'];
$email_da_conta = $_COOKIE["email"];
$tarefa = new Tarefa($connect);
$tarefa->adicionarTarefa($titulo, $descricao, $email_da_conta);
mysqli_close($connect);
?>