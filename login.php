<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/css/style.css">
    <link rel="stylesheet" href="./Assets/css/responsividade.css">
    <title>Document</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Faça mais com o To do<br> Entre com sua conta</h1>
            <img src="./Assets/svg/Checklist-bro.svg" class="left-login-image">
        </div>
        <div class="right-login">
            <div class="card-login">
                <form action="./CRUD/logar_usuario.php" method="post">
                <h1>Login</h1>
                <div class="text-fild">
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="text-fild">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                    <a href="./cadastro.php">Criar Conta</a>
                </div>
                <button type="submit" class="btn-login">Login</button>
            </form>
            </div>
        </div>
    </div>


    <?php
        if(isset($_COOKIE["email"])){

            header("Location: a.php");
            
        }

    ?>
</body>
</html>