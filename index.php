<?php
    $url = isset($_GET['url']) ? $_GET['url'] : 'login';
    $rota = "App/Controllers/Rotas.php";
    switch ($url) {
        case "login":
            include($rota);
            $controller = new Rotas();
            $controller->rota($url);
        break;
        case "dashboard":
            include($rota);
            $controller = new Rotas();
            $controller ->rota($url);
        break;
    }
?>