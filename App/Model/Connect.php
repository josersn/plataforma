<?php

class Connect {

 private $host = "mysql:host=localhost;dbname=saphirEduc;port=3306";
 private $user = "root";
 private $pass = "";

 protected function newConnect() {
     return new PDO($this->host, $this->user, $this->pass );
 }


?>
}