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
                case "admin";
                    $this->viewAdmin();
                break;
                case "maintenance":
                    $this->viewMaintenance();
                break;
            }
        }

        private function viewLogin() {
            include("App/Views/login.php");
        }
        private function viewDashboard(){
            include("App/Views/dashboard.php");
        }
        private function viewAdmin() {
            include("App/Views/admin.php");
        }
        private function viewMaintenance(){
            include("App/Views/maintenance.php");
        }
}
?>