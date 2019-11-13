<?php
    if(isset($_POST['btn-admin'])){
        require("App/Controllers/NovoAdmin.php");
        $controller = new NovoAdmin();
        $user = $_POST['user-admin'];
        $senha = $_POST['senha-admin'];
        $controller->falar();
        // $controller->ValidateLogin($user, $senha);
    }
?>
<!DOCTYPE html>
<html lang=pt-br>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="App/Views/admin/style.css">
    <title>Painel de Administração Saphir Educ</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="col-img">
            <img src="App/Views/admin/img/login.svg" alt="">
        </div>
        <div class="col-form">
            <h1>Painel de Administração</h1>
                <form action="" method="post">
                    <input type="text" required placeholder="Usuário" name="user-admin">
                    <input type="password" required placeholder="Senha" name="senha-admin">
                    <button type="submit" name="btn-admin">Entrar</button>
                </form>
        </div>
        
    </div>
</body>
</html>
