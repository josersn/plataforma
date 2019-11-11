<?php
    $url = isset($_GET['url']) ? $_GET['url'] : 'login';
    switch ($url) {
        case "login":
            include("App/Controllers/Rotas.php");
            $controller = new Rotas();
            $controller->rota($url);
        break;
    }
?>