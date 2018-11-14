<?php
//creating a db connection

class DBConnection
{
private $host = "localhost";
private $db = "projektas";
private $user = "root";
private $pass = "root";

private $connection;

function __construct()
{
$this->connection = new mysqli($this->host, $this->user, $this->pass, $this->db);
}

public function getConnection(){
return $this->connection;
}

}

?>