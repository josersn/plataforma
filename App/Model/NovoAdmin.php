<?php
require("Connect.php");
    class NovoAdminModel extends Connect{
        public function CadNovoAdmin($user, $pass, $nome, $level){
            $db = parent::Connect;
            $query = $db->prepare("INSERT INTO admin (nome, usuario, senha, nivel) VALUES (?,?,?,?) ");
            return $query->execute([$nome, $user, $pass, $level]);
        }
    }
?>