<?php
    class Rotas{
        public function rota($url){
            switch ($url) {
                case "login":
                $this->viewlogin();
                break;
            }
        }

        private function viewLogin() {
            include("App/Views/login.php");
        }
}
?>