<?php
    require("config.php");
    if(isset($_POST['btn-entrar'])){
        include("App/controller/Login.php");

    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="App/Views/login/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&display=swap" rel="stylesheet">
    <title>Saphir Educ - EAD Plataforma</title>
</head>
<body>
        <main>
            <div class="container">
                <H2>Saphir <span>Educ</span></H2>
                    <form action="" method="post" class="form-login">
                        <input type="email" placeholder="Usuário">
                        <input type="password" placeholder="Senha">
                        <button type="submit" class="btn-entrar">Entrar</button>
                    </form>
                    <a href="problemasEntrar.php">Problemas para entrar ?</a>
            </div>
        </main>
        <footer>© Saphir Educ - EAD Plataforma 2019</footer>
</body>
</html>