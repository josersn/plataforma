<?php

class Connect {

 private $host = "mysql:host=br902.hostgator.com.br;dbname=saphir49_escola;port=3306";
 private $user = "saphir49_jose";
 private $pass = "Netoramos10!";

 protected function newConnect() {
     return new PDO($this->host, $this->user, $this->pass );
 }


}
?>