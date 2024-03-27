<?php
    include_once "config.php";

    class TarefaM {
        private $connect;
    
        public function __construct($connect) {
            $this->connect = $connect;
        }
    
        public function listarTarefas($email_da_conta) {
            $sql = "SELECT tarefa.id_tarefa, tarefa.titulo, tarefa.descricao, tarefa.estado 
                    FROM tarefa 
                    INNER JOIN usuario ON tarefa.id_do_usuario = usuario.id_usuario 
                    WHERE usuario.email = '$email_da_conta'";
            $result = mysqli_query($this->connect, $sql);
    
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='item' draggable='true'>";
                    echo "<p><strong>" . $row["titulo"] . "</strong></p>";
                    echo "<p>" . $row["descricao"] . "</p>";
                    echo "<hr>";
                    echo "</div>";
                }
            } else {
                echo "Nenhuma tarefa encontrada.";
            }
        }
    }
    
    $email_da_conta = $_COOKIE["email"] ?? null;
    $tarefaM = new TarefaM($connect);
    $tarefaM->listarTarefas($email_da_conta);    

    mysqli_close($connect);

    


?>