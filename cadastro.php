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
            <h1>Junte-se ao To do<br>  Crie sua conta grátis</h1>
            <img src="./Assets/svg/Checklist-cuate.svg" class="left-login-image">
        </div>
        <div class="right-login">
            <div class="card-login">
                <form action="a.php" method="get">
                <h1>Cadastro</h1>
                <div class="text-fild">
                    <label for="nome">Nome</label>
                    <input type="text" name="usuario" placeholder="Nome">
                </div>
                <div class="text-fild">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="text-fild">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Crie Sua Senha">
                </div>
                <div class="text-fild">
                    <label for="repetir-senha">Senha</label>
                    <input type="password" name="repetir-senha" placeholder="Repetir Senha">
                    <a href="./login.php">Fazer Login</a>
                </div>
                <button type="submit" class="btn-login">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
    <?php
     if(isset($_COOKIE["usuario"])){

        header("Location: a.php");
        
    }
    ?>
</body>
</html>