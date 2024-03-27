<?php
    include_once "config.php";
    class Login {
        private $connect;
    
        public function __construct($connect) {
            $this->connect = $connect;
        }
    
        public function realizarLogin($email, $senha) {
            $sql = "SELECT * FROM usuario WHERE email = '$email'";
            $result = mysqli_query($this->connect, $sql);
    
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if ($senha == $row['senha']) {
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
                    echo "Senha incorreta.";
                }
            } else {
                echo "Usuário não encontrado.";
            }
        }
    }
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $login = new Login($connect);
    $login->realizarLogin($email, $senha);
    mysqli_close($connect);
?>