<?php
    $url = isset($_GET['url']) ? $_GET['url'] : 'maintenance';
    $rota = "App/Controllers/Rotas.php";
    switch ($url) {
        case "maintenance": 
            include($rota);
            $controller = new Rotas();
            $controller->rota($url);
        break;
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
        case "admin":
            include($rota);
            $controller = new Rotas();
            $controller->rota($url);
        break;
    }
?>