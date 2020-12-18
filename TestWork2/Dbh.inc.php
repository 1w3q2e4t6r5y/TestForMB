<?php
class Dbh{
private $serverName;
private $userName;
private $password;
private $dbName;

protected function connection(){
$this->serverName="localhost";
$this->userName="mysql";
$this->password="mysql";
$this->dbName="emails";

$conn=new mysqli($this->serverName,$this->userName,$this->password,$this->dbName);
return $conn;
}
}



?>