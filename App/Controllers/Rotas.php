<?php
    class Rotas{
        public function rota($url){
            switch ($url) {
                case "login":
                $this->viewlogin();
                break;
                case "dashboard":
                    $this->viewDashboard();
                break;
            }
        }

        private function viewLogin() {
            include("App/Views/login.php");
        }
        private function viewDashboard(){
            include("App/Views/dashboard.php");
        }
}
?>