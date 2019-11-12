<?php
?>
<!DOCTYPE html>
<html lang=pt-br>
<head>
    <script src="https://kit.fontawesome.com/5d3019bf70.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="App/Views/dashboard/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="App/Views/header/style.css">

    <title>Área do aluno</title>
</head>
<body>
    <?php include('App/Views/header.php')?>
    <!-- <main class="dashboard">
        <div class="mail">
        <button class="collapse" type="button">Caixa de Mensagens</button>
        <div class="content" id="tab-menu">
            <div class="list">
            <a href="#">Bem-vindo a Saphir Educ</a>
            <a href="#">Bem-vindo a Saphir Educ</a>
            <a href="#">Bem-vindo a Saphir Educ</a>
            </div>
        </div>
        </div>
    </main> -->
    
        
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $("nav ul img").click(function () {
                $(".close").slideToggle();
            });

            $(".mail .collapse").click(function() {
                $(".mail .content").slideToggle()

            });
        })
        
    </script>
</body>
</html>
